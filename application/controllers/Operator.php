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
        $data['list'] = $this->pns->list_pns();
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();

        //$this->load->set_rules('nip', 'Nip',);

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('operator/list_pns', $data);
        $this->load->view('templates/footer');
    }
    public function list_operator()
    {
        $data['list'] = $this->db->get_where('t_pns', ['level' => 'Operator'])->result_array();
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();

        //$this->load->set_rules('nip', 'Nip',);

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('operator/list_operator', $data);
        $this->load->view('templates/footer');
    }
    public function list_pimpinan()
    {
        $data['list'] = $this->db->get_where('t_pns', ['level' => 'Pimpinan'])->result_array();
        $data['menu'] = $this->pns->menu();
        $data['session'] = $this->pns->session();

        //$this->load->set_rules('nip', 'Nip',);

        $this->load->view('templates/header');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('operator/list_pimpinan', $data);
        $this->load->view('templates/footer');
    }
    public function insert()
    {
        $show = $this->db->get_where('t_pns', ['nip' => $this->input->post('nip')])->row_array();
        if ($show['nip'] > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger talert-dismissible fade show" role="alert">
            <strong>NIP Sudah Ada</strong> 
            </div>');
        } else {
            $this->pns->insert_pns();
        }


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
    public function insert_operator()
    {
        $show = $this->db->get_where('t_pns', ['nip' => $this->input->post('nip')])->row_array();
        if ($show['nip'] > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger talert-dismissible fade show" role="alert">
            <strong>NIP Sudah Ada</strong> 
            </div>');
        } else {
            $this->pns->insert_pns();
        }


        redirect('Operator/list_operator');
    }
    public function delete_operator($id_pns)
    {
        $this->pns->delete_pns($id_pns);

        redirect('Operator/list_operator');
    }
    public function update_operator()
    {
        $this->pns->update_pns();
        $this->pns->update_pimpinan();
        redirect('Operator/list_operator');
    }
    public function insert_pimpinan()
    {
        $show = $this->db->get_where('t_pns', ['nip' => $this->input->post('nip')])->row_array();
        if ($show['nip'] > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger talert-dismissible fade show" role="alert">
            <strong>NIP Sudah Ada</strong> 
            </div>');
        } else {
            $this->pns->insert_pimpinan();
            $this->pns->update_pimpinan();
            $this->pns->update_qr();
        }


        redirect('Operator/list_pimpinan');
    }
    public function delete_pimpinan($id_pns)
    {
        $this->pns->delete_pns($id_pns);

        redirect('Operator/list_pimpinan');
    }
    public function update_pimpinan()
    {
        $this->pns->update_pns();
        redirect('Operator/list_pimpinan');
    }
}
