<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
        $this->load->model('M_pengajuan', 'pengajuan');
    }
    public function list_pengajuan()
    {
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->list_pengajuan();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/list_pengajuan', $data);
    }
    public function detail_pengajuan($id_pengajuan)
    {
        $data['session'] = $this->pns->session();
        $data['detail'] = $this->pengajuan->getPengajuanById($id_pengajuan);
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/detail_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function acc($id_pengajuan)
    {
        $this->pengajuan->acc_operator($id_pengajuan);

        $this->session->set_flashdata('message', '<div class="alert alert-success talert-dismissible fade show" role="alert">
     <strong>Detail Berhasil Diperiksa</strong> 
     </div>');

        redirect('Pengajuan/list_pengajuan');
    }
    public function pimpinan()
    {
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->list_acc_pimpinan();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/list_acc', $data);
        $this->load->view('templates/footer');
    }
    public function accPimpinan($id_pengajuan)
    {
        $this->pengajuan->acc_operator($id_pengajuan);

        $this->session->set_flashdata('message', '<div class="alert alert-success talert-dismissible fade show" role="alert">
     <strong>Berhasil Diacc</strong> 
     </div>');

        redirect('Pengajuan/pimpinan');
    }
}
