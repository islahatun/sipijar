<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/footer');
    }
    public function list_pns()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('operator/list_pns');
        $this->load->view('templates/footer');
    }
}
