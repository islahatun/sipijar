<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
        $this->load->model('M_pengajuan', 'pengajuan');
        $this->load->library('pdf');
    }
    public function list_pengajuan()
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->list_pengajuan();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/list_pengajuan', $data);
    }
    public function detail_pengajuan($id_pengajuan)
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['detail'] = $this->pengajuan->getPengajuanById($id_pengajuan);
        $data['sts'] = $this->pengajuan->sk($id_pengajuan);
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/detail_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function sk($id_pengajuan)
    {
        $data['detail'] = $this->pengajuan->getPengajuanById($id_pengajuan);

        $data = [
            'sts_sk_pns' => $this->input->post('sts_sk_pns'),
            'id_pengajuan' => $this->input->post('sts_sk_pns')
        ];
        // $id_pengajuan = $this->input->post('id_pengajuan');
        $sts_sk_rekom = $this->input->post('sts_sk_rekom');
        $sts_akreditasi = $this->input->post('sts_akreditasi');
        $sts_jadwal_kuliah = $this->input->post('sts_jadwal_kuliah');
        $sts_sk_ptn = $this->input->post('sts_sk_ptn');

        $this->db->insert('t_sts_pengajuan', $data);

        $this->db->set('sts_sk_rekom', $sts_sk_rekom);
        $this->db->where('id', $id_pengajuan);
        $this->db->update('t_sts_pengajuan');

        $this->db->set('sts_akreditasi', $sts_akreditasi);
        $this->db->where('id', $id_pengajuan);
        $this->db->update('t_sts_pengajuan');

        $this->db->set('sts_jadwal_kuliah', $sts_jadwal_kuliah);
        $this->db->where('id', $id_pengajuan);
        $this->db->update('t_sts_pengajuan');

        $this->db->set('sts_sk_ptn', $sts_sk_ptn);
        $this->db->where('id', $id_pengajuan);
        $this->db->update('t_sts_pengajuan');
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
        $data['menu'] = $this->pns->menu();
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
    public function pdf()
    {

        $data['laporan'] = $this->pengajuan->laporan();
        $this->load->view('laporan', $data);
    }
}
