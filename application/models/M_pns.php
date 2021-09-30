<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pns extends CI_Model
{
    public function getpns()
    {
    }
    public function insert_pns()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'no_karpeg' => $this->input->post('no_karpeg'),
            'nama' => $this->input->post('nama'),
            'status_kepegawaian' => $this->input->post('status_kepegawaian')
        ];
        $this->db->insert('m_pns', $data);
    }
}
