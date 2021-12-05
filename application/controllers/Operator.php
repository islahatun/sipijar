<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
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
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function list_pns()
    {


        $data['list'] = $this->pns->getpns();
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('operator/list_pns', $data);
        $this->load->view('templates/footer');
    }
    public function insert()
    {
        $this->pns->insert_pns();

        redirect('Operator/list_pns');
    }
    public function delete($id_pns)
    {
        $this->pns->delete_pns($id_pns);

        redirect('Operator/list_pns');
    }
    public function update()
    {
        $this->pns->update_pns();
        redirect('Operator/list_pns');
    }
}
