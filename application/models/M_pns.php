<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pns extends CI_Model
{
    public function session()
    {
        return  $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
    }
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
            'level' => $this->input->post('level'),
            'nama' => $this->input->post('nama'),
            'unit_kerja' => $this->input->post('unit_kerja'),
            'gol' => $this->input->post('gol'),
            'aktif' => 1
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
    public function regis()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $unit_kerja = $this->input->post('unit_kerja');
        $jabatan = $this->input->post('jabatan');
        $sandi = password_hash($this->input->post('sandi'), PASSWORD_DEFAULT);

        $this->db->set('nama', $nama);
        $this->db->set('email', $email);
        $this->db->set('unit_kerja', $unit_kerja);
        $this->db->set('jabatan', $jabatan);
        $this->db->set('sandi', $sandi);
        $this->db->where('nip', $nip);
        $this->db->update('t_pns');
    }
    public function edit_poto()
    {
        $foto = $_FILES['profil']['name'];
        if ($foto) {
            $config['upload_path']          = './assets/assets/img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profil')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                $nip = $n['nip'];

                $profil = $new_logo;
                $this->db->set('profil', $profil);
                $this->db->where('nip', $nip);
                $this->db->update('t_pns');
            }
        }
    }
    public function edit_profile()
    {
        $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
        $nip = $n['nip'];
        // $jk = $this->input->post('jk');
        // $status = $this->input->post('status');

        $nama = $this->input->post('nama');
        $gelar_depan = $this->input->post('gelar_depan');
        $gelar_belakang = $this->input->post('gelar_belakang');
        $jk = $this->input->post('jk');
        $tmpt_lahir = $this->input->post('tmpt_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_sk_pns = $this->input->post('rt/rw');
        $pendidikan = $this->input->post('pendidikan');
        $email = $this->input->post('email');
        $jabatan = $this->input->post('jabatan');
        $agama = $this->input->post('agama');
        $status_kawin = $this->input->post('status_kawin');
        $penempatan_kerja = $this->input->post('penempatan_kerja');
        $unit_kerja = $this->input->post('unit_kerja');
        $pangkat = $this->input->post('pangkat');
        $gol = $this->input->post('gol');
        $jurusan = $this->input->post('jurusan');


        $this->db->set('nama', $nama);
        $this->db->set('jk', $jk);
        $this->db->set('gelar_depan', $gelar_depan);
        $this->db->set('gelar_belakang', $gelar_belakang);
        $this->db->set('tmpt_lahir', $tmpt_lahir);
        $this->db->set('tgl_lahir', $tgl_lahir);
        $this->db->set('email', $email);
        $this->db->set('alamat', $alamat);
        $this->db->set('no_sk_pns', $no_sk_pns);
        $this->db->set('pendidikan', $pendidikan);
        $this->db->set('jabatan', $jabatan);
        $this->db->set('agama', $agama);
        $this->db->set('status_kawin', $status_kawin);
        $this->db->set('penempatan_kerja', $penempatan_kerja);
        $this->db->set('unit_kerja', $unit_kerja);
        $this->db->set('pangkat', $pangkat);
        $this->db->set('gol', $gol);
        $this->db->set('jurusan', $jurusan);
        $this->db->where('nip', $nip);
        $this->db->update('t_pns');
    }
}
