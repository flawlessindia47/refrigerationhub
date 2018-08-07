<?php

/**
 * Created by 4ajaykan47.
 * User: Flawless India Pvt ltd
 * Date: 8/3/2018
 * Time: 3:53 PM
 */
class Manage extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
        $this->load->model('Setting_model');

    }

      /********Manage product*****Section**********************/
    public function product()
    {
        $data['title'] = 'List Material';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Setting_model->getProductList();
        $this->load->view('admin/manage/product-manage', $data);
    }

     public function productShow()
    {
        $data['title'] = 'Product Detail';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['showProd'] = $this->Setting_model->getProductList();
        $this->load->view('admin/manage/product-show', $data);
        $this->load->view('admin/include/footer');
    }

    /********Manage product****Section***End***Here****/
    
    
    public function lead(){
        
         $data['title'] = 'List Material';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Setting_model->gePostbyRequirementLead();
        $this->load->view('admin/manage/lead-manage', $data);
        
    }



}