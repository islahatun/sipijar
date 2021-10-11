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
        $this->load->view('pengajuan/list_pengajuan');
        $this->load->view('templates/footer');
    }
    public function detail_pengajuan($id_pengajuan)
    {
        $data['session'] = $this->pns->session();
        $data['detail'] = $this->pengajuan->getPengajuanById($id_pengajuan);
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/detail_pengajuan');
        $this->load->view('templates/footer');
    }
}
