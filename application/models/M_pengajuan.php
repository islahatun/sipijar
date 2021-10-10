<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengajuan extends CI_Model
{
    public function sk_pns()
    {
        $sk_pns = $_FILES['sk_pns']['name'];
        if ($sk_pns) {
            $config['upload_path']          = './assets/assets/pengajuan/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('sk_pns')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $sk_pns = $new_logo;
                $this->db->set('sk_pns', $sk_pns);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    public function sk_rekom()
    {
        $sk_rekom = $_FILES['sk_rekom']['name'];
        if ($sk_rekom) {
            $config['upload_path']          = './assets/assets/pengajuan/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('sk_rekom')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $sk_rekom = $new_logo;
                $this->db->set('sk_rekom', $sk_rekom);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    public function skp()
    {
        $skp = $_FILES['skp']['name'];
        if ($skp) {
            $config['upload_path']          = './assets/assets/pengajuan/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('skp')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $skp = $new_logo;
                $this->db->set('skp', $skp);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    public function sk_ptn()
    {
        $sk_ptn = $_FILES['sk_ptn']['name'];
        if ($sk_ptn) {
            $config['upload_path']          = './assets/assets/pengajuan/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('sk_ptn')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $sk_ptn = $new_logo;
                $this->db->set('sk_ptn', $sk_ptn);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    public function jadwal_kuliah()
    {
        $jadwal_kuliah = $_FILES['jadwal_kuliah']['name'];
        if ($jadwal_kuliah) {
            $config['upload_path']          = './assets/assets/pengajuan/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('jadwal_kuliah')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $jadwal_kuliah = $new_logo;
                $this->db->set('jadwal_kuliah', $jadwal_kuliah);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    public function sk_akreditasi()
    {
        $sk_akreditasi = $_FILES['sk_akreditasi']['name'];
        if ($sk_akreditasi) {
            $config['upload_path']          = './assets/assets/pengajuan/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('sk_akreditasi')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $sk_akreditasi = $new_logo;
                $this->db->set('sk_akreditasi', $sk_akreditasi);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    public function pengajuan()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'tgl_pengajuan' => $this->input->post('tgl_pengajuan'),
            'program_kuliah' => $this->input->post('program_kuliah'),
            'status' => $this->input->post('status')
        ];
        $this->db->insert('t_pengajuan', $data);
    }
    public function list_pengajuan()
    {
        return $this->db->get('t_pengajuan')->result_array();
    }
}