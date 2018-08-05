<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubscribeToBuyAlerts extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Home_model');
        $this->load->model('Country_model');
    }

    public function index()
	{
        $data['title']="Refrigration Hub";
        $data['author']="Refrigration Hub";
        $data['description']="Refrigration Hub";
        $data['keywords']="Refrigration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/include/header', $data);
		$this->load->view('site/subscribe-to-buy-alerts/index');
        $this->load->view('site/include/footer');
	}
}
