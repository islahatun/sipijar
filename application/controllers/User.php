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
        $data['session'] = $this->pns->session();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/dashboard_user', $data);
        $this->load->view('templates/footer');
    }
    public function profile()
    {
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
        $data['session'] = $this->pns->session();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('user/pengajuan', $data);
        $this->load->view('templates/footer');
    }
}
