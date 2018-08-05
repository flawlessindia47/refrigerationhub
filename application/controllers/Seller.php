<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Country_model');
    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/seller/header', $data);
        $this->load->view('site/seller/index');
        $this->load->view('site/include/footer');
    }


    public function productdetail()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/seller/header', $data);
        $this->load->view('site/seller/product-detail');
        $this->load->view('site/include/footer');
    }

    public function productservices()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/seller/header', $data);
        $this->load->view('site/seller/product-services');
        $this->load->view('site/include/footer');
    }
    public function contactus()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/seller/header', $data);
        $this->load->view('site/seller/contact-us');
        $this->load->view('site/include/footer');
    }
}
