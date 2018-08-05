<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrimaryBussinessType extends CI_Controller
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
        $data['title'] = 'Add Primary Bushiness Type';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_primarybussinesstype";
        $DbKey = "mst_pbt_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $tableName = "mast_tbl_primarybussinesstype";
        $Wherecondition =array('delStatus'=>'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName,$Wherecondition);
        $this->load->view('admin/bussiness-type/index', $data);
        $this->load->view('admin/include/footer');


    }

    public function addBusinesstype()
    {

        $this->form_validation->set_rules('txtBussTYpe', 'Owner Ship Type', 'trim|required');
        $this->form_validation->set_rules('txtStatus', 'Status', 'trim');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/PrimaryBussinessType');
        } else {

            $primrybutype = $this->input->post('txtBussTYpe');
            $select = "pbt_name";
            $tableName = "mast_tbl_primarybussinesstype";
            $whereCondition = array('pbt_name' => $primrybutype);
            $returnVal = "pbt_name";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $primrybutype) {
                $this->session->set_flashdata('error', 'This <b style="color: greenyellow; ">' . $primrybutype . ' </b> is Already Exist Please Enter Another Primary Business Type...!');
                redirect('admin/PrimaryBussinessType');
            } else {
                $paymenyName = $this->input->post('txtBussTYpe');
            }

            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'Inactive';
            }

            $data = array(
                'pbt_name' => $paymenyName,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_primarybussinesstype";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Primary Business Record successfully Save');
                redirect("admin/PrimaryBussinessType");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/PrimaryBussinessType");
            }
        }


    }

    public function updateBusinesstype()
    {

        $idH = $this->input->post('hidden_id');
        if (!empty($this->input->post('txtBussTYpe'))) {
            $primrybutype = $this->input->post('txtBussTYpe');
        } else {
            $primrybutype = '';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'Inactive';
        }
        $data = array(
            'pbt_name' => $primrybutype,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_primarybussinesstype";
        $DbKey = "mst_pbt_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Primary Business Successfully updated...!!');
            redirect("admin/PrimaryBussinessType");
        } else {
            $this->session->set_flashdata('error', 'Primary Business  is not successfully updated...!!');
            redirect("admin/PrimaryBussinessType");
        }

    }


    public function deleteBusType()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_primarybussinesstype";
            $DbKey = "mst_pbt_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Primary Business Type Delete Successfully ...!!');
                redirect("admin/PrimaryBussinessType");
            } else {
                $this->session->set_flashdata('error', 'Primary Business Type  is not successfully deleted...!!');
                redirect("admin/PrimaryBussinessType");
            }

        } else {

            $tableName = "mast_tbl_primarybussinesstype";
            $DbKey = "mst_pbt_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Primary Business Type Restore Successfully ...!!');
                redirect("admin/PrimaryBussinessType");
            } else {
                $this->session->set_flashdata('error', 'Primary Business Type is Already Restore...!!');
                redirect("admin/PrimaryBussinessType");
            }
        }
    }

    public function Restore()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_primarybussinesstype";
        $DbKey = "mst_pbt_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Primary Business Type Restore Successfully ...!!');
            redirect("admin/PrimaryBussinessType");
        } else {
            $this->session->set_flashdata('error', 'Primary Business Type  is not successfully Restore...!!');
            redirect("admin/PrimaryBussinessType");
        }
    }


}