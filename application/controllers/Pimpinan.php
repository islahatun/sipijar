<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
        $this->load->model('M_pengajuan', 'pengajuan');
    }
    public function index()
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['Acc'] = $this->pengajuan->listAcc();
        $data['Pengajuan'] = $this->pengajuan->listPengajuan();
        $data['Perbaikan'] = $this->pengajuan->listPerbaikan();
        $data['Validasi'] = $this->pengajuan->listValidasi();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/footer');
    }
}
