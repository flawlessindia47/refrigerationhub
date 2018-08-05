<?php

/**
 * Created by $ajaykan47.
 * User: Flawless India Pvt Ltd
 * Date: 7/25/2018
 * Time: 3:56 PM
 */
class Latestbuylead extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('Registerlogindetails'))) {
            redirect(base_url());

        }
        $this->load->model('Home_model');

    }

    public function index()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $this->load->view('user/seller/buy-lead/latest-buy-lead');
        $this->load->view('user/seller/include/footer');
    }

}