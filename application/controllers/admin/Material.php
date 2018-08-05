<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 7/30/2018
 * Time: 11:01 AM
 */
class Material extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
        $this->load->model('Setting_model');
        $this->load->model('Category_model');
    }

    public function index()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_material";
        $DbKey = "mst_material_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/material/index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addMaterial()
    {

        if ($_POST['btnSubmit'] == "Add Material") {
            $this->form_validation->set_rules('txtmaterial', 'Material Name ', 'required|is_unique[mast_tbl_material.m_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Material';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/material/index', $data);
                $this->load->view('admin/include/footer');
            } else {

                if (!empty($this->input->post('txtmaterial'))) {
                    $txtmaterial = $this->input->post('txtmaterial');
                } else {
                    $txtmaterial = 'null';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'm_name' => $txtmaterial,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "mast_tbl_material";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $this->session->set_flashdata('done', 'Your material successfully saved...!');
                    redirect("admin/Material");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Material");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Material");
        }
    }

    public function listMaterial()
    {

        $data['title'] = 'List Material';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = 'mast_tbl_material';
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/material/list', $data);

    }

    public function updateMaterial()
    {

        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('txtmaterial'))) {
            $txtmaterial = $this->input->post('txtmaterial');
        } else {
            $txtmaterial = 'null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $dataArr = array(
            'm_name' => $txtmaterial,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_material";
        $DbKey = "mst_material_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {
            $this->session->set_flashdata('done', 'Your material record  successfully change...!');
            redirect("admin/Material/listMaterial");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Material/listMaterial");
        }

    }


    public function Restore()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_material";
        $DbKey = "mst_material_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Material Restore Successfully ...!!');
            redirect('admin/Material/listMaterial');
        } else {
            $this->session->set_flashdata('error', 'Material  is not successfully Restore...!!');
            redirect('admin/Material/listMaterial');
        }
    }


    public function deleteMaterial()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_material";
            $DbKey = "mst_material_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Material Info Delete Successfully ...!!');
                redirect('admin/Material/listMaterial');
            } else {
                $this->session->set_flashdata('error', 'Material is not successfully deleted...!!');
                redirect('admin/Material/listMaterial');
            }

        } else {

            $tableName = "mast_tbl_material";
            $DbKey = "mst_material_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Material Info Delete Successfully ...!!');
                redirect('admin/Material/listMaterial');
            } else {
                $this->session->set_flashdata('error', 'Material  is not successfully deleted...!!');
                redirect('admin/Material/listMaterial');
            }
        }

    }

    /***********Unit measure*************/
    public function measureunit()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Measure Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mst_tbl_unitmeasure";
        $DbKey = "um_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/material/measure-unit', $data);
        $this->load->view('admin/include/footer');

    }

    public function addmeasureunit()
    {

        if ($_POST['btnSubmit'] == "Add Unit") {
            $this->form_validation->set_rules('txtUnit', 'Unit   Name ', 'required|is_unique[mst_tbl_unitmeasure.um_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Measure Unit';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/material/measure-unit', $data);
                $this->load->view('admin/include/footer');
            } else {

                if (!empty($this->input->post('txtUnit'))) {
                    $unit = $this->input->post('txtUnit');
                } else {
                    $unit = 'null';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'um_name' => $unit,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "mst_tbl_unitmeasure";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $this->session->set_flashdata('done', 'Your unit successfully saved...!');
                    redirect("admin/Material/measureunit");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Material/measureunit");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Material/measureunit");
        }
    }

    public function listmeasureunit()
    {
        $data['title'] = 'List Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = 'mst_tbl_unitmeasure';
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/material/measure-unit-list', $data);

    }

    public function updatemeasureunit()
    {

        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('txtUnit'))) {
            $unit = $this->input->post('txtUnit');
        } else {
            $unit = 'null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $dataArr = array(
            'um_name' => $unit,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_unitmeasure";
        $DbKey = "um_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {
            $this->session->set_flashdata('done', 'Your record successfully change...!');
            redirect("admin/Material/listmeasureunit");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Material/listmeasureunit");
        }

    }

    public function Restoremeasureunit()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_unitmeasure";
        $DbKey = "um_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Unit Restore Successfully ...!!');
            redirect("admin/Material/listmeasureunit");
        } else {
            $this->session->set_flashdata('error', 'Unit  is not successfully Restore...!!');
            redirect("admin/Material/listmeasureunit");
        }
    }

    public function deletemeasureunit()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',
            );
            $tableName = "mst_tbl_unitmeasure";
            $DbKey = "um_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Unit Info Delete Successfully ...!!');
                redirect("admin/Material/listmeasureunit");
            } else {
                $this->session->set_flashdata('error', 'Unit is not successfully deleted...!!');
                redirect("admin/Material/listmeasureunit");
            }
        } else {
            $tableName = "mst_tbl_unitmeasure";
            $DbKey = "un_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Material Info Delete Successfully ...!!');
                redirect("admin/Material/listmeasureunit");
            } else {
                $this->session->set_flashdata('error', 'Material  is not successfully deleted...!!');
                redirect("admin/Material/listmeasureunit");
            }
        }

    }

    /***********Unit measure**End Here***********/
    /***********Capacity Unit***********/
    public function capacity()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Capacity Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mst_tbl_capacityunit";
        $DbKey = "cu_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/material/capacity', $data);
        $this->load->view('admin/include/footer');

    }

    public function addcapacity()
    {
        // print_r($_POST); die;
        if ($_POST['btnSubmit'] == "Add Capacity") {
            $this->form_validation->set_rules('txtCapacity', 'Unit   Name ', 'required|is_unique[mst_tbl_capacityunit.cu_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Capacity Unit';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/material/capacity', $data);
                $this->load->view('admin/include/footer');
            } else {

                if (!empty($this->input->post('txtCapacity'))) {
                    $unit = $this->input->post('txtCapacity');
                } else {
                    $unit = 'null';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'cu_name' => $unit,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "mst_tbl_capacityunit";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $this->session->set_flashdata('done', '<strong style="color: purple;">  ' . $unit . '</strong> is  Successfully Saved...!');
                    redirect("admin/Material/capacity");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Material/capacity");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Material/capacity");
        }

    }

    public function listcapacity()
    {
        $data['title'] = 'List capacity Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = 'mst_tbl_capacityunit';
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/material/capacity-list', $data);

    }

    public function updatecapacity()
    {
        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('txtCapacity'))) {
            $unit = $this->input->post('txtCapacity');
        } else {
            $unit = 'null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $dataArr = array(
            'cu_name' => $unit,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_capacityunit";
        $DbKey = "cu_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {
            $this->session->set_flashdata('done', 'Your record successfully change...!');
            redirect("admin/Material/listcapacity");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Material/listcapacity");
        }
    }

    public function Restorecapacityunit()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_capacityunit";
        $DbKey = "cu_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Capacity Unit Restore Successfully ...!!');
            redirect("admin/Material/listcapacity");
        } else {
            $this->session->set_flashdata('error', 'Capacity Unit is not successfully Restore...!!');
            redirect("admin/Material/listcapacity");
        }
    }

    public function deletecapacity()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',
            );
            $tableName = "mst_tbl_capacityunit";
            $DbKey = "cu_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Unit Info Delete Successfully ...!!');
                redirect("admin/Material/listcapacity");
            } else {
                $this->session->set_flashdata('error', 'Unit is not successfully deleted...!!');
                redirect("admin/Material/listcapacity");
            }
        } else {
            $tableName = "mst_tbl_capacityunit";
            $DbKey = "cu_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Capacity Info Delete Successfully ...!!');
                redirect("admin/Material/listcapacity");
            } else {
                $this->session->set_flashdata('error', 'Capacity is not successfully deleted...!!');
                redirect("admin/Material/listcapacity");
            }
        }

    }

    /***********Capacity Unit***End Here********/
    /***********Power Unit ***********/
    public function powersource()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Capacity Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mst_tbl_powersource";
        $DbKey = "psouce_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/material/power-source', $data);
        $this->load->view('admin/include/footer');

    }

    public function addpowersource()
    {

        if ($_POST['btnSubmit'] == "Add") {
            $this->form_validation->set_rules('txtSource', 'Unit   Name ', 'required|is_unique[mst_tbl_powersource.ps_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Power-Source';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/material/power-source', $data);
                $this->load->view('admin/include/footer');
            } else {

                if (!empty($this->input->post('txtSource'))) {
                    $unit = $this->input->post('txtSource');
                } else {
                    $unit = 'null';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'ps_name' => $unit,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "mst_tbl_powersource";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $this->session->set_flashdata('done', '<strong style="color: #807E1B;">  ' . $unit . '</strong> is  Successfully Saved...!');
                    redirect("admin/Material/powersource");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Material/powersource");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Material/powersource");
        }

    }

    public function listpsource()
    {
        $data['title'] = 'List capacity Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = 'mst_tbl_powersource';
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/material/power-source-list', $data);

    }

    public function updatepsource()
    {

        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('txtSource'))) {
            $unit = $this->input->post('txtSource');
        } else {
            $unit = 'null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $dataArr = array(
            'ps_name' => $unit,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_powersource";
        $DbKey = "psouce_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {
            $this->session->set_flashdata('done', 'Your record successfully change...!');
            redirect("admin/Material/listpsource");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Material/listpsource");
        }
    }

    public function Restorepsource()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_powersource";
        $DbKey = "psouce_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Power Source Restore Successfully ...!!');
            redirect("admin/Material/listpsource");
        } else {
            $this->session->set_flashdata('error', 'Power Source is not successfully Restore...!!');
            redirect("admin/Material/listpsource");
        }
    }

    public function deletepsource()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',
            );
            $tableName = "mst_tbl_powersource";
            $DbKey = "psouce_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Power Source Info Delete Successfully ...!!');
                redirect("admin/Material/listpsource");
            } else {
                $this->session->set_flashdata('error', 'Power Source is not successfully deleted...!!');
                redirect("admin/Material/listpsource");
            }
        } else {
            $tableName = "mst_tbl_powersource";
            $DbKey = "psouce_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Power Source Info Delete Successfully ...!!');
                redirect("admin/Material/listpsource");
            } else {
                $this->session->set_flashdata('error', 'Power Source is not successfully deleted...!!');
                redirect("admin/Material/listpsource");
            }
        }

    }

    /***********Capacity Unit***End Here********/

    /***********Power source Unit***********/
    public function powerunit()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Power Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mst_tbl_poweunit";
        $DbKey = "punit_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/material/power-unit', $data);
        $this->load->view('admin/include/footer');

    }

    public function addpowerunit()
    {

        if ($_POST['btnSubmit'] == "Add") {
            $this->form_validation->set_rules('txtSource', 'Unit   Name ', 'required|is_unique[mst_tbl_poweunit.punit_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Power-Unit';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/material/power-unit', $data);
                $this->load->view('admin/include/footer');
            } else {

                if (!empty($this->input->post('txtSource'))) {
                    $unit = $this->input->post('txtSource');
                } else {
                    $unit = 'null';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'punit_name' => $unit,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "mst_tbl_poweunit";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $this->session->set_flashdata('done', '<strong style="color: #807E1B;">  ' . $unit . '</strong> is  Successfully Saved...!');
                    redirect("admin/Material/powerunit");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Material/powerunit");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Material/powerunit");
        }

    }

    public function listpowerunit()
    {
        $data['title'] = 'List Power Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = 'mst_tbl_poweunit';
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/material/power-unit-list', $data);

    }

    public function updatepowerunit()
    {

        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('txtSource'))) {
            $unit = $this->input->post('txtSource');
        } else {
            $unit = 'null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $dataArr = array(
            'punit_name' => $unit,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_poweunit";
        $DbKey = "punit_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {
            $this->session->set_flashdata('done', 'Your record successfully change...!');
            redirect("admin/Material/listpowerunit");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Material/listpowerunit");
        }
    }

    public function Restorepowerunit()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mst_tbl_poweunit";
        $DbKey = "punit_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Power Unit Restore Successfully ...!!');
            redirect("admin/Material/listpowerunit");
        } else {
            $this->session->set_flashdata('error', 'Power Unit is not successfully Restore...!!');
            redirect("admin/Material/listpowerunit");
        }
    }

    public function deletepowerunit()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',
            );
            $tableName = "mst_tbl_poweunit";
            $DbKey = "punit_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Power Unit Info Delete Successfully ...!!');
                redirect("admin/Material/listpowerunit");
            } else {
                $this->session->set_flashdata('error', 'Power Unit is not successfully deleted...!!');
                redirect("admin/Material/listpowerunit");
            }
        } else {
            $tableName = "mst_tbl_poweunit";
            $DbKey = "punit_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Power Unit Info Delete Successfully ...!!');
                redirect("admin/Material/listpowerunit");
            } else {
                $this->session->set_flashdata('error', 'Power Unit is not successfully deleted...!!');
                redirect("admin/Material/listpowerunit");
            }
        }

    }

    /***********Power Source Unit***End Here********/
    /***********mounting start here********/
    public function mounting()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Power Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_mounting";
        $DbKey = "mou_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/material/mounting', $data);
        $this->load->view('admin/include/footer');

    }

    public function addmounting()
    {

        if ($_POST['btnSubmit'] == "Add") {
            $this->form_validation->set_rules('txtSource', 'Unit   Name ', 'required|is_unique[mast_tbl_mounting.mou_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Mounting';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/material/mounting', $data);
                $this->load->view('admin/include/footer');
            } else {

                if (!empty($this->input->post('txtSource'))) {
                    $unit = $this->input->post('txtSource');
                } else {
                    $unit = 'null';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'mou_name' => $unit,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "mast_tbl_mounting";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $this->session->set_flashdata('done', '<strong style="color: #807E1B;">  ' . $unit . '</strong> Unit is  Successfully Saved...!');
                    redirect("admin/Material/mounting");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Material/mounting");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Material/mounting");
        }

    }

    public function listmounting()
    {
        $data['title'] = 'List Mounting Unit';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = 'mast_tbl_mounting';
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/material/mounting-unit-list', $data);

    }

    public function updatemounting()
    {

        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('txtSource'))) {
            $unit = $this->input->post('txtSource');
        } else {
            $unit = 'null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $dataArr = array(
            'mou_name' => $unit,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_mounting";
        $DbKey = "mou_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {
            $this->session->set_flashdata('done', 'Your record successfully change...!');
            redirect("admin/Material/listmounting");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Material/listmounting");
        }
    }

    public function Restoremounting()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_mounting";
        $DbKey = "mou_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Power Unit Restore Successfully ...!!');
            redirect("admin/Material/listmounting");
        } else {
            $this->session->set_flashdata('error', 'Power Unit is not successfully Restore...!!');
            redirect("admin/Material/listmounting");
        }
    }

    public function deletemounting()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',
            );
            $tableName = "mast_tbl_mounting";
            $DbKey = "mou_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Power Unit Info Delete Successfully ...!!');
                redirect("admin/Material/listmounting");
            } else {
                $this->session->set_flashdata('error', 'Power Unit is not successfully deleted...!!');
                redirect("admin/Material/listmounting");
            }
        } else {
            $tableName = "mast_tbl_mounting";
            $DbKey = "mou_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {
                $this->session->set_flashdata('done', 'Power Unit Info Delete Successfully ...!!');
                redirect("admin/Material/listmounting");
            } else {
                $this->session->set_flashdata('error', 'Power Unit is not successfully deleted...!!');
                redirect("admin/Material/listmounting");
            }
        }

    }
    /**********mountingt***End Here********/


}