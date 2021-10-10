<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/dashboard_user');
        $this->load->view('templates/footer');
    }
    public function profile()
    {


        $data['list'] = $this->pns->getpns();



        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('operator/list_pns', $data);
        $this->load->view('templates/footer');
    }
}
