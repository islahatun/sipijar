<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pns extends CI_Model
{
    function tgl_indo($tgl)
    {
        $tanggal = substr($tgl, 8, 2);
        $bulan = $this->bulan_indo(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);

        return $tanggal . ' ' . $bulan . ' ' . $tahun;
    }

    function jam_indo($tgl)
    {
        $jam = substr($tgl, 11, 5);
        return $jam . ' WIB';
    }

    function bulan_indo($bln)
    {
        switch ($bln) {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }

    function hari_indo($tgl)
    {
        $day = date('D', strtotime($tgl));
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        return $dayList[$day];
    }

    public function session()
    {
        return  $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
    }
    public function list_pns()
    {
        return $this->db->get_where('t_pns', ['level' => 'User'])->result_array();
    }
    public function menu()
    {
        $pengguna = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
        $p = $pengguna['level'];

        $menu = "SELECT * FROM m_menu JOIN m_akses_user ON m_akses_user.id_menu = m_menu.id_menu where m_akses_user.level = '$p'";

        return $this->db->query($menu)->result_array();
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
        $nama = $this->input->post('nama');
        $unit_kerja = $this->input->post('unit_kerja');
        $gol = $this->input->post('gol');
        $jk = $this->input->post('jk');

        $this->db->set('nip', $nip);
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
        $no_sk_pns = $this->input->post('no_sk_pns');
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
    public function insert_pimpinan()
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
    public function update_qr()
    {
        $foto = $_FILES['qrcode']['name'];
        if ($foto) {
            $config['upload_path']          = './assets/assets/img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('qrcode')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $new_logo = $this->upload->data('file_name');
                // $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
                // $nip = $n['nip'];
                $qr = $new_logo;
                $nip = $this->input->post('nip');

                $this->db->set('qrcode', $qr);
                $this->db->where('nip', $nip);
                $this->db->update('m_pimpinan');
            }
        }
    }
    public function update_pimpinan()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');

        $this->db->set('nama', $nama);
        $this->db->set('nip', $nip);
        $this->db->update('m_pimpinan');
    }
}
