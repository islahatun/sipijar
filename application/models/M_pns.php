<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pns extends CI_Model
{
    public function list_pns($limit, $start)
    {
        return $this->db->get('t_pns', $limit, $start)->result_array();
    }
    public function count_pns()
    {
        return $this->db->get('t_pns')->num_rows();
    }
    public function getpns()
    {
        $id = "SELECT * FROM t_pns ";
        return $this->db->query($id)->result_array();
    }
    public function insert_pns()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'no_karpeg' => $this->input->post('no_karpeg'),
            'nama' => $this->input->post('nama'),
            'unit_kerja' => $this->input->post('unit_kerja'),
            'gol' => $this->input->post('gol'),
        ];
        $this->db->insert('t_pns', $data);
    }
    public function delete_pns($id_pns)
    {
        $this->db->where('id_pns', $id_pns);
        $this->db->delete('t_pns');
    }
    public function update_pns()
    {
        $id_pns = $this->input->post('id_pns');
        $nip = $this->input->post('nip');
        $no_karpeg = $this->input->post('no_karpeg');
        $nama = $this->input->post('nama');
        $unit_kerja = $this->input->post('unit_kerja');
        $gol = $this->input->post('gol');
        $jk = $this->input->post('jk');

        $this->db->set('nip', $nip);
        $this->db->set('no_karpeg', $no_karpeg);
        $this->db->set('nama', $nama);
        $this->db->set('unit_kerja', $unit_kerja);
        $this->db->set('gol', $gol);
        $this->db->set('jk', $jk);
        $this->db->where('id_pns', $id_pns);
        $this->db->update('t_pns');
    }
}
