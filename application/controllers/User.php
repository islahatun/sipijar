<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
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

        $this->session->flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
         Data Berhasil Diubah
        </div>
      </div>');
        redirect('User/profile');
    }
}
