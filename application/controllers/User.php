<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
    $pengajuan = $this->pengajuan->getPengajuanByUser();
    $data['cetak'] = $this->pengajuan->cetakByUser();
    $data['session'] = $this->pns->session();
    $session = $this->pns->session();
    // var_dump($pengajuan);
    // die;
    $this->session->set_flashdata('alert', '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Selamat Datang! </strong>' . $session['nama'] . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');

    if ($pengajuan['status'] == 'Menunggu Perbaikan Pengajuan') {
      $this->session->set_flashdata('message', '
          <div class="alert alert-success d-flex align-items-center mr-3" role="alert">
          <i class="fas fa-check-circle"></i> 
          <div>
            ' . $pengajuan['komentar'] . ' <a href="' . base_url('User/edit_pengajuan/') . $pengajuan['id_pengajuan'] . '">klik Untuk memperbaiki</a>
          </div>
        </div>');
    }
    $this->session->set_flashdata('tracking', '
      <div class="alert alert-success d-flex align-items-center mr-3" role="alert">
      <i class="fas fa-check-circle"></i> 
      <div>
        ' . $pengajuan['status'] . '
      </div>
    </div>');



    $this->load->view('templates/header');
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('dashboard/dashboard_user', $data);
    $this->load->view('templates/footer');
  }
  public function profile()
  {
    $data['menu'] = $this->pns->menu();
    $data['session'] = $this->pns->session();

    $this->load->view('templates/header');
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('user/profil', $data);
    $this->load->view('templates/footer');
  }
  public function update()
  {
    $this->pns->edit_profile();
    $this->pns->edit_poto();

    $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fas fa-check-circle"></i> 
                <div>
                  Berhasil Mengubah Data
                </div>
              </div>');
    redirect('User/profile');
  }
  public function pengajuan()
  {
    $data['menu'] = $this->pns->menu();
    $data['session'] = $this->pns->session();
    $data['pengajuan'] = $this->pengajuan->pengajuanByUser();

    $this->load->view('templates/header');
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('user/pengajuan', $data);
    $this->load->view('templates/footer');
  }
  public function insert_pengajuan()
  {
    $this->pengajuan->pengajuan();
    $this->pengajuan->sk_pns();
    $this->pengajuan->sk_rekom();
    // $this->pengajuan->skp();
    $this->pengajuan->sk_ptn();
    $this->pengajuan->jadwal_kuliah();
    $this->pengajuan->sk_akreditasi();
    $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fas fa-check-circle"></i> 
                <div>
                  Berhasil Mengajukan
                </div>
              </div>');
    redirect('User/pengajuan');
  }
  public function edit_pengajuan($id_pengajuan)
  {
    $data['menu'] = $this->pns->menu();
    $data['session'] = $this->pns->session();
    $data['pengajuan'] = $this->pengajuan->getPengajuanById($id_pengajuan);


    $this->load->view('templates/header');
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('user/edit_pengajuan', $data);
    $this->load->view('templates/footer');
  }
  public function kirim_edit_pengajuan()
  {
    $this->pengajuan->edit_pengajuan();
    $this->pengajuan->sk_pns();
    $this->pengajuan->sk_rekom();
    // $this->pengajuan->skp();
    $this->pengajuan->sk_ptn();
    $this->pengajuan->jadwal_kuliah();
    $this->pengajuan->sk_akreditasi();

    $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="fas fa-check-circle"></i> 
                <div>
                  Berhasil Mengajukan
                </div>
              </div>');
    redirect('User');
  }
}
