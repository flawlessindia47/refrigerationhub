<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
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
        $this->load->view('site/include/header', $data);
        $data['bannerResult'] = $this->Home_model->getBanner();
        $this->load->view('site/home/index',$data);
        $this->load->view('site/include/footer');
    }
}
