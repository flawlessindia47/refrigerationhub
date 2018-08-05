<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: Flawless India Pvt Ltd
 * Date: 7/26/2018
 * Time: 12:33 PM
 */
class Setting extends CI_Controller
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

        $data['title'] = 'Website Setting';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_logo";
        $data['editResult'] = $this->Setting_model->showtList($tableName);
        $this->load->view('admin/setting/logo', $data);
        $this->load->view('admin/include/footer');
    }

    /************Change Logo Function************$ajaykan47*****************/
    public function addInfo()
    {
        $this->form_validation->set_rules('txtCmpName', 'Company Name', 'required|trim');
        $this->form_validation->set_rules('txtCmpAddress', 'Company Address', 'required|trim');
        $this->form_validation->set_rules('txtCmpCIN', 'Company CIN', 'required|trim');
        $this->form_validation->set_rules('txtCmpTel', 'Teliphone ', 'required|trim');
        $this->form_validation->set_rules('txtCmpfax', 'Fax', 'required|trim');
        $this->form_validation->set_rules('txtStatus', 'Status', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');
            $data['title'] = 'Website Setting';
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/setting/logo', $data);
            $this->load->view('admin/include/footer');

        } else {
            $upload_data = "";
            $cname = $this->input->post('txtCmpName');
            $caddress = $this->input->post('txtCmpAddress');
            $ccin = $this->input->post('txtCmpCIN');
            $ctel = $this->input->post('txtCmpTel');
            $cfax = $this->input->post('txtCmpfax');
            $status = $this->input->post('txtStatus');
            $createdate = date('Y-m-d H:i:s');
            if (!empty($status)) {
                $status = "active";
            } else {
                $status = "inactive";
            }
            $config['upload_path'] = './uploads/logo';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Setting', $error);
            } else {
                $upload_data = $this->upload->data();
                $dataArr = array(
                    'cmp_logo' => $upload_data['file_name'],
                    'cmp_logopath' => $upload_data['full_path'],
                    'cmp_name' => $cname,
                    'cmp_address' => $caddress,
                    'cmp_cin' => $ccin,
                    'cmp_tel' => $ctel,
                    'cmp_fax' => $cfax,
                    'created_at' => $createdate,
                    'status' => $status
                );

                $tableName = "tbl_logo";
                $res = $this->Setting_model->insertData($tableName, $dataArr);
                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Company Information has been saved Successfully  !');
                    redirect('Admin/Setting');
                } else {
                    $this->session->set_flashdata('error', 'You are Missing Something  Please Try Again ...!');
                    redirect('Admin/Setting');
                }
            }
        }
    }

    public function UpdateInfo()
    {

        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');
        $cname = $this->input->post('txtCmpName');
        $caddress = $this->input->post('txtCmpAddress');
        $ccin = $this->input->post('txtCmpCIN');
        $ctel = $this->input->post('txtCmpTel');
        $cfax = $this->input->post('txtCmpfax');
        $status = $this->input->post('txtStatus');

        $updated_at = date('Y-m-d H:i:s');

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/logo';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Setting', $error);
            } else {
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
                $full_path = $upload_data['full_path'];
            }
        } else {
            $file_name = $filename;
            $full_path = $fullpath;
        }
        $data = array(
            'cmp_logo' => $file_name,
            'cmp_logopath' => $full_path,
            'cmp_name' => $cname,
            'cmp_address' => $caddress,
            'cmp_cin' => $ccin,
            'cmp_tel' => $ctel,
            'cmp_fax' => $cfax,
            'status' => $status,
            'updated_at' => $updated_at
        );
        $tableName = "tbl_logo";
        $DbKey = "logo_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Information Successfully updated...!!');
            redirect(base_url() . "Admin/Setting");
        } else {
            $this->sssion->set_flashdata('error', 'Information not successfully updated...!!');
            redirect(base_url() . "Admin/Setting");
        }

    }




    /************Change Logo Function*****************************/

    /**********Upload Banner********/
    public function Banner()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Banner';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_banner";
        $DbKey = "banner_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/setting/banner', $data);
        $this->load->view('admin/include/footer');
    }

    public function addBanner()
    {
        $this->form_validation->set_rules('txtBannerTitle', 'Banner Title ', 'required');
        $this->form_validation->set_rules('txtStatus', 'status', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');
            $data['title'] = 'Banner';
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/setting/banner');
            $this->load->view('admin/include/footer');

        } else {
            $upload_data = "";
            $banner_title = $this->input->post('txtBannerTitle');
            $status = $this->input->post('txtStatus');
            $createdate = date('Y-m-d H:i:s');
            if (!empty($status)) {
                $status = "active";
            } else {
                $status = "inactive";
            }
            $config['upload_path'] = './uploads/banner';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Setting/Banner', $error);
            } else {
                $upload_data = $this->upload->data();

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];
                $dataArr = array('filename' => $upload_data['file_name'],
                    'filepath' => $upload_data['full_path'],
                    'title' => $banner_title,
                    'status' => $status,
                    'created_at' => $createdate,
                    'delStatus' => 'no',
                    'created_by' => $user_type
                );
                $tableName = "tbl_banner";
                $res = $this->Setting_model->insertData($tableName, $dataArr);

                $data = array('upload_data' => $this->upload->data());

                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your Banner Upload successfully');
                    redirect(base_url() . "Admin/Setting/Banner");
                } else {
                    $this->session->set_flashdata('error', 'Your data not Inserted');
                    redirect(base_url() . "Admin/Setting/Banner");
                }
            }
        }
    }

    public function updateBanner()
    {

        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');
        $banner_title = $this->input->post('txtBannerTitle');
        $status = $this->input->post('txtStatus');

        $updated_at = date('Y-m-d H:i:s');

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/banner';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Setting/addBanner', $error);

            } else {

                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
                $full_path = $upload_data['full_path'];
            }
        } else {

            $file_name = $filename;
            $full_path = $fullpath;
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $data = array(
            'filename' => $file_name,
            'filepath' => $full_path,
            'title' => $banner_title,
            'status' => $status,
            'updated_at' => $updated_at,
            'delStatus' => 'no',
            'created_by' => $user_type
        );
        $tableName = "tbl_banner";
        $DbKey = "banner_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Banner  Successfully updated...!!');
            redirect(base_url() . "Admin/Setting/listBanner");
        } else {
            $this->sssion->set_flashdata('error', 'Banner  is not successfully updated...!!');
            redirect(base_url() . "Admin/Setting/listBanner");
        }

    }

    public function listBanner()
    {
        $data['title'] = 'List Banner';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_banner";
        $Wherecondition = array('delStatus' => 'no');
        $data['list'] = $this->Category_model->getListByUserType($tableName, $Wherecondition);
        $this->load->view('admin/setting/listBanner', $data);

    }


    public function deleteBanner()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "tbl_banner";
            $DbKey = "banner_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Banner  Delete Successfully ...!!');
                redirect('admin/Setting/listBanner');
            } else {
                $this->session->set_flashdata('error', 'Banner not successfully deleted...!!');
                redirect('admin/Setting/listBanner');
            }

        } else {

            $tableName = "tbl_banner";
            $DbKey = "banner_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Banner  Restore Successfully ...!!');
                redirect('admin/Setting/listBanner');
            } else {
                $this->session->set_flashdata('error', 'Banner  is Already Restore...!!');
                redirect('admin/Setting/listBanner');
            }
        }
    }

    public function bannerRestore()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "tbl_banner";
        $DbKey = "banner_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Banner  Restore Successfully ...!!');
            redirect('admin/Setting/listBanner');
        } else {
            $this->session->set_flashdata('error', 'Banner is not successfully Restore...!!');
            redirect('admin/Setting/listBanner');
        }
    }

    /*************Upload Banner End Here ******************************/


}