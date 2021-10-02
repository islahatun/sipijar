<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
    }
    public function index()
    {
        $data['list'] = $this->pns->getpns();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('Operator/validasi', $data);
        $this->load->view('templates/footer');
    }
}
