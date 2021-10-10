<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
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
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/footer');
    }
    public function list_pns()
    {
        //config pagination
        // $config['base_url'] = 'http://localhost:8080/perpustakaan/Kepala_Pustakawan/list_pustakawan';
        // $config['total_rows'] = $this->pns->count_pns();
        // $config['per_page'] = 15;

        //initialize
        // $this->pagination->initialize($config);

        //styling
        // $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        // $config['full_tag_close'] = '</ul></nav>';

        // $config['first_link'] = 'First';
        // $config['first_tag_open'] = ' <li class="page-item">';
        // $config['first_tag_close'] = '</li>';

        // $config['last_link'] = 'Last';
        // $config['last_tag_open'] = ' <li class="page-item">';
        // $config['last_tag_close'] = '</li>';

        // $config['next_link'] = '&raqou';
        // $config['next_tag_open'] = ' <li class="page-item">';
        // $config['next_tag_close'] = '</li>';

        // $config['next_link'] = '&laqou';
        // $config['next_tag_open'] = ' <li class="page-item">';
        // $config['next_tag_close'] = '</li>';

        // $config['cur_tag_open'] = ' <li class="page-item active">';
        // $config['cur_tag_close'] = '</li>';

        // $config['num_tag_open'] = ' <li class="page-item active">';
        // $config['num_tag_close'] = '</li>';

        // $config['attributes'] = array('class' => 'page-link');

        //menentukan halaman yang akan dimulai
        // $data['start'] = $this->uri->segment(3);
        // $data['list'] = $this->pns->list_pns($config['per_page'], $data['start']);
        // $data['id'] = $this->pns->getpns();

        $data['list'] = $this->pns->getpns();

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
