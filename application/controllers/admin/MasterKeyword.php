<?php
/**
 * Created by $ajaykan47.
 * User: Flawless India Pvt Ltd
 * Date: 7/21/2018
 * Time: 10:52 AM
 */
class MasterKeyword extends CI_Controller
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
        $data['title'] = 'Add Main Keyword';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_keyword";
        $DbKey = "mst_key_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $tableName = "mast_tbl_keyword";
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/mainkeyword/index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addKeyword()
    {
        //print_r($_POST); die;
        $this->form_validation->set_rules('txtkeywordName', 'Quantity Unit ', 'trim|required');
        $this->form_validation->set_rules('txtStatus', 'Status', 'trim');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/MasterKeyword');
        } else {
            $keywordName = $this->input->post('txtkeywordName');
            $select = "key_name";
            $tableName = "mast_tbl_keyword";
            $whereCondition = array('key_name' => $keywordName);
            $returnVal = "key_name";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $keywordName) {
                $this->session->set_flashdata('error', 'This <b style="color: greenyellow; ">' . $keywordName . ' </b> is Already Exist Please Enter Other Keyword...!');
                redirect('admin/MasterKeyword');
            } else {
                $keywordName = $this->input->post('txtkeywordName');
            }
            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'Inactive';
            }
            $data = array(
                'key_name' => $keywordName,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_keyword";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/MasterKeyword");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/MasterKeyword");
            }
        }

    }

    public function updateKeyword()
    {
        $idH = $this->input->post('hidden_id');
        $keywordName = $this->input->post('txtkeywordName');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'Inactive';
        }
        $data = array(
            'key_name' => $keywordName,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_keyword";
        $DbKey = "mst_key_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Record Successfully updated...!!');
            redirect("admin/MasterKeyword");
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect("admin/MasterKeyword");
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
            $tableName = "mast_tbl_keyword";
            $DbKey = "mst_key_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Product Keyword  Delete Successfully ...!!');
                redirect("admin/MasterKeyword");
            } else {
                $this->session->set_flashdata('error', 'Product Keyword is not successfully deleted...!!');
                redirect("admin/MasterKeyword");
            }

        } else {

            $tableName = "mast_tbl_keyword";
            $DbKey = "mst_key_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Product Keyword  Restore Successfully ...!!');
                redirect("admin/MasterKeyword");
            } else {
                $this->session->set_flashdata('error', 'Product Keyword  is Already Restore...!!');
                redirect("admin/MasterKeyword");
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
        $tableName = "mast_tbl_keyword";
        $DbKey = "mst_key_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Product Keyword Restore Successfully ...!!');
            redirect("admin/MasterKeyword");
        } else {
            $this->session->set_flashdata('error', 'Product Keyword is not successfully Restore...!!');
            redirect("admin/MasterKeyword");
        }
    }

}