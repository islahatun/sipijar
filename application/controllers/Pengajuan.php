<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
        $this->load->model('M_pengajuan', 'pengajuan');
        $this->load->library('Ciqrcode');
        $this->load->library('Mypdf');
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
        // $data['sts'] = $this->pengajuan->sk($id_pengajuan);
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/detail_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    // public function sk($id_pengajuan)
    // {
    //     $data['detail'] = $this->pengajuan->getPengajuanById($id_pengajuan);

    //     $data = [
    //         'sts_sk_pns' => $this->input->post('sts_sk_pns'),
    //         'id_pengajuan' => $this->input->post('sts_sk_pns')
    //     ];
    //     // $id_pengajuan = $this->input->post('id_pengajuan');
    //     $sts_sk_rekom = $this->input->post('sts_sk_rekom');
    //     $sts_akreditasi = $this->input->post('sts_akreditasi');
    //     $sts_jadwal_kuliah = $this->input->post('sts_jadwal_kuliah');
    //     $sts_sk_ptn = $this->input->post('sts_sk_ptn');

    //     $this->db->insert('t_sts_pengajuan', $data);

    //     $this->db->set('sts_sk_rekom', $sts_sk_rekom);
    //     $this->db->where('id', $id_pengajuan);
    //     $this->db->update('t_sts_pengajuan');

    //     $this->db->set('sts_akreditasi', $sts_akreditasi);
    //     $this->db->where('id', $id_pengajuan);
    //     $this->db->update('t_sts_pengajuan');

    //     $this->db->set('sts_jadwal_kuliah', $sts_jadwal_kuliah);
    //     $this->db->where('id', $id_pengajuan);
    //     $this->db->update('t_sts_pengajuan');

    //     $this->db->set('sts_sk_ptn', $sts_sk_ptn);
    //     $this->db->where('id', $id_pengajuan);
    //     $this->db->update('t_sts_pengajuan');
    // }
    public function acc($id_pengajuan)
    {
        $this->pengajuan->acc_operator($id_pengajuan);

        $this->session->set_flashdata('detail', '<div class="alert alert-success talert-dismissible fade show" role="alert">
     <strong>Detail Berhasil Diperiksa</strong> 
     </div>');

        redirect('Operator/');
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
    public function cetak($id_pengajuan)
    {
        $tgl = date('D-M-Y');
        $data['tgl'] = $this->pns->tgl_indo($tgl);
        $data['cetak'] = $this->pengajuan->cetakById($id_pengajuan);
        // $n = $this->pengajuan->cetakById($id_pengajuan);
        // var_dump($n);
        // die;
        $this->load->view('cetak', $data);
    }
    public function cetakByUser()
    {


        $data['cetak'] = $this->pengajuan->cetakByUser();
        // $n = $this->pengajuan->cetakById($id_pengajuan);
        // var_dump($n);
        // die;
        $this->load->view('cetak', $data);
    }
    public function qrcode()
    {

        $pimpinan = "SELECT nama FROM m_pimpinan";
        $p = $this->db->query($pimpinan)->row_array();
        // generete qrcode
        $params['data'] = $p;
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH . 'tes.png';
        $this->ciqrcode->generate($params);

        echo '<img src="' . base_url() . 'tes.png" />';
    }
    public function suratpdf()
    {
        $data['cetak'] = $this->pengajuan->cetakByUser();
        // $n = $this->pengajuan->cetakByUser();
        // var_dump($n);
        // die;
        $this->load->view('cetak', $data);


        // $this->mypdf->generate('cetak', $data, 'Surat Izin Belajar', 'A4', 'portait');
    }
    public function proses_pengajuan()
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->proses_pengajuan();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/proses_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function acc_pengajuan()
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->acc_pengajuan();
        // var_dump($data);
        // die;

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/acc_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function validasi_pengajuan()
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->validasi_pengajuan();


        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/validasi_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function perbaikan_pengajuan()
    {
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();
        $data['pengajuan'] = $this->pengajuan->perbaikan_pengajuan();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan/perbaikan_pengajuan', $data);
        $this->load->view('templates/footer');
    }
    public function no_surat()
    {
        $data = $this->input->post('no_surat');
        $id = $this->input->post('id_pengajuan');

        $this->db->set('no_surat', $data);
        $this->db->where('id_pengajuan', $id);
        $this->db->update('t_pengajuan');

        redirect('pengajuan/acc_pengajuan');
    }
}
