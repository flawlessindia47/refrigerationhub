<?php
/**
 * Created by $ajaykan47.
 * User: Flawless India
 * Date: 7/20/2018
 * Time: 3:54 PM
 */
class QuantityUnit extends CI_Controller
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
        $data['title'] = 'Add Ownership Type';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_quantityunit";
        $DbKey = "mst_qty_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $tableName = "mast_tbl_quantityunit";
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/quanityunit/index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addQuantity()
    {
        $this->form_validation->set_rules('txtQuanityUnit', 'Quantity Unit ', 'trim|required');
        $this->form_validation->set_rules('txtStatus', 'Status', 'trim');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/QuantityUnit');
        } else {
            $quanityUnit = $this->input->post('txtQuanityUnit');
            $select = "qty_name";
            $tableName = "mast_tbl_quantityunit";
            $whereCondition = array('qty_name' => $quanityUnit);
            $returnVal = "qty_name";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $quanityUnit) {
                $this->session->set_flashdata('error', 'This <b style="color: greenyellow; ">' . $quanityUnit . ' </b> is Already Exist Please Enter Other Type...!');
                redirect('admin/QuantityUnit');
            } else {
                $quanityUnit = $this->input->post('txtQuanityUnit');
            }
            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'Inactive';
            }
            $data = array(
                'qty_name' => $quanityUnit,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_quantityunit";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/QuantityUnit");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/QuantityUnit");
            }
        }

    }

    public function updateQuantity()
    {
        $idH = $this->input->post('hidden_id');
        $quanityUnit = $this->input->post('txtQuanityUnit');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'Inactive';
        }
        $data = array(
            'qty_name' => $quanityUnit,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_quantityunit";
        $DbKey = "mst_qty_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Record Successfully updated...!!');
            redirect("admin/QuantityUnit");
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect("admin/QuantityUnit");
        }

    }


    public function delete()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_quantityunit";
            $DbKey = "mst_qty_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Quantity Unit  Delete Successfully ...!!');
                redirect("admin/QuantityUnit");
            } else {
                $this->session->set_flashdata('error', 'Quantity Unit is not successfully deleted...!!');
                redirect("admin/QuantityUnit");
            }

        } else {

            $tableName = "mast_tbl_quantityunit";
            $DbKey = "mst_qty_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Quantity  Restore Successfully ...!!');
                redirect("admin/QuantityUnit");
            } else {
                $this->session->set_flashdata('error', 'Quantity  is Already Restore...!!');
                redirect("admin/QuantityUnit");
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
        $tableName = "mast_tbl_quantityunit";
        $DbKey = "mst_qty_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Quantity Restore Successfully ...!!');
            redirect("admin/QuantityUnit");
        } else {
            $this->session->set_flashdata('error', 'Quantity is not successfully Restore...!!');
            redirect("admin/QuantityUnit");
        }
    }

}