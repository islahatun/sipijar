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
                // $id_pengajuan = $this->input->post('id_pengajuan');
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

                // $id_pengajuan = $this->input->post('id_pengajuan');

                $sk_rekom = $new_logo;
                $this->db->set('sk_rekom', $sk_rekom);
                $this->db->where('nip', $nip);
                $this->db->update('t_pengajuan');
            }
        }
    }
    // public function skp()
    // {
    //     $skp = $_FILES['skp']['name'];
    //     if ($skp) {
    //         $config['upload_path']          = './assets/assets/pengajuan/';
    //         $config['allowed_types']        = 'pdf';
    //         $config['max_size']             = 2048;
    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('skp')) {
    //             $error = array('error' => $this->upload->display_errors());

    //             $this->load->view('upload_form', $error);
    //         } else {
    //             $new_logo = $this->upload->data('file_name');
    //             $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
    //             $nip = $n['nip'];

    //             $skp = $new_logo;
    //             $this->db->set('skp', $skp);
    //             $this->db->where('nip', $nip);
    //             $this->db->update('t_pengajuan');
    //         }
    //     }
    // }
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
                // $id_pengajuan = $this->input->post('id_pengajuan');
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
                // $id_pengajuan = $this->input->post('id_pengajuan');
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
                // $id_pengajuan = $this->input->post('id_pengajuan');
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
            'no_sk' => $this->input->post('no_sk'),
            'tgl_pengajuan' => $this->input->post('tgl_pengajuan'),
            'program_kuliah' => $this->input->post('program_kuliah'),
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            'instansi_pendidikan' => $this->input->post('instansi_pendidikan'),
            'tgl_rekomendasi' => $this->input->post('tgl_rekomendasi'),
            'status' => $this->input->post('status')
        ];
        $this->db->insert('t_pengajuan', $data);
    }
    public function list_pengajuan()
    {
        $query = "SELECT *, t_pns.nama, t_pns.gol, t_pns.pangkat FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip";
        return $this->db->query($query)->result_array();
    }
    public function list_acc_pimpinan()
    {
        $query = "SELECT *, t_pns.nama, t_pns.gol, t_pns.pangkat FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip WHERE t_pengajuan.status ='Persyaratan Sudah Lengkap' or t_pengajuan.komentar ='Acc'  ";

        return $this->db->query($query)->result_array();
    }

    public function list_laporan_acc()
    {
        $keyword = $this->input->post('keyword');

        $query = "SELECT *, t_pns.nama, t_pns.gol, t_pns.pangkat FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip WHERE t_pengajuan.no_surat is not null";

        $this->db->like('nama', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->query($query);

        return $this->db->query($query)->result_array();
    }

    public function getPengajuanById($id_pengajuan)
    {
        $query = "SELECT *, t_pns.nama, t_pns.gol, t_pns.pangkat, t_pns.nip FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip WHERE t_pengajuan.id_pengajuan=$id_pengajuan";
        return $this->db->query($query)->row_array();
    }
    public function acc_operator($id_pengajuan)
    {
        $komentar = $this->input->post('komentar');
        $status = $this->input->post('status');

        $this->db->set('status', $status);
        $this->db->set('komentar', $komentar);
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('t_pengajuan');
    }
    public function getPengajuanByUser()
    {

        $this->db->select('*');
        $this->db->from("t_pengajuan");
        $this->db->join("t_pns", "t_pns.nip = t_pengajuan.nip");
        $this->db->where("t_pengajuan.nip", $this->session->userdata('nip'));
        $this->db->order_by("id_pengajuan", "DESC");

        $finalResponse =  $this->db->get_where()->row_array();
        return $finalResponse;

        // return  $this->db->get_where('t_pengajuan', ['nip' => $this->session->userdata('nip')])->result_array();
    }
    public function edit_pengajuan()
    {

        $id_pengajuan = $this->input->post('id_pengajuan');
        $no_sk = $this->input->post('no_sk');
        $program_kuliah = $this->input->post('program_kuliah');
        $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
        $instansi_pendidikan = $this->input->post('instansi_pendidikan');
        $tgl_rekomendasi = $this->input->post('tgl_rekomendasi');
        $status = $this->input->post('status');

        $this->db->set('no_sk', $no_sk);
        $this->db->set('program_kuliah', $program_kuliah);
        $this->db->set('jenjang_pendidikan', $jenjang_pendidikan);
        $this->db->set('instansi_pendidikan', $instansi_pendidikan);
        $this->db->set('status', $status);
        $this->db->set('tgl_rekomendasi', $tgl_rekomendasi);
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('t_pengajuan');
    }
    public function laporan()
    {
        $query = "SELECT *, t_pns.nama, t_pns.nip, t_pns.pangkat FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip WHERE t_pengajuan.status='Acc' ";
        return $this->db->query($query)->result_array();
    }
    public function sk($id_pengajuan)
    {
        return $this->db->get_where('t_sts_pengajuan', ['id_pengajuan' => $id_pengajuan])->row_array();
    }

    public function listAcc()
    {
        $db = "SELECT *, nama FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip where `status` ='Acc' or `status` ='Validasi Pengajuan'  ";
        return $this->db->query($db)->num_rows();
    }
    public function listValidasi()
    {
        $db = "SELECT *, nama FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip where  `status` ='Validasi Pengajuan'  ";
        return $this->db->query($db)->num_rows();
    }
    public function listPerbaikan()
    {
        $db = "SELECT *, nama FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip where  `status` ='Menunggu Perbaikan Pengajuan'  ";
        return $this->db->query($db)->num_rows();
    }
    public function listPengajuan()
    {
        $db = "SELECT *, nama FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip where  `status` ='Proses Pengajuan'  ";
        return $this->db->query($db)->num_rows();
    }
    public function cetakById($id_pengajuan)
    {
        $query = "SELECT *, t_pns.nama, t_pns.gol, t_pns.pangkat, tgl_rekomendasi FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip WHERE t_pengajuan.id_pengajuan = $id_pengajuan";

        return $this->db->query($query)->row_array();
    }
    public function cetakByUser()
    {
        $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
        $nip = $n['nip'];
        $query = "SELECT *, t_pns.nama, t_pns.gol, t_pns.pangkat, tgl_rekomendasi FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip WHERE t_pengajuan.nip = $nip AND t_pengajuan.status ='Acc' ORDER BY t_pengajuan.tgl_pengajuan ASC ";

        return $this->db->query($query)->row_array();
    }
    public function pengajuanByUser()
    {
        $n = $this->db->get_where('t_pns', ['nip' => $this->session->userdata('nip')])->row_array();
        $nip = $n['nip'];
        $query = "SELECT * FROM t_pengajuan  WHERE nip = $nip ORDER BY id_pengajuan desc";

        return $this->db->query($query)->row_array();
    }
    public function perbaikan_pengajuan()
    {
        $this->db->select('*', 'nama');
        $this->db->from('t_pengajuan');
        $this->db->join('t_pns', 't_pengajuan.nip = t_pns.nip');
        $this->db->where('status', 'Menunggu Perbaikan Pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function acc_pengajuan()
    {
        $db = "SELECT *, nama FROM t_pengajuan JOIN t_pns ON t_pns.nip = t_pengajuan.nip where `status` ='Acc' or `status` ='Validasi Pengajuan'  ";
        return $this->db->query($db)->result_array();

        // $this->db->select('*', 'nama');
        // $this->db->from('t_pengajuan');
        // $this->db->join('t_pns', 't_pengajuan.nip = t_pns.nip');
        // $this->db->where('status', 'Acc' or 'status', 'Validasi Pengajuan');
        // $query = $this->db->get()->result_array();
        // return $query;
    }
    public function validasi_pengajuan()
    {
        $this->db->select('*', 'nama');
        $this->db->from('t_pengajuan');
        $this->db->join('t_pns', 't_pengajuan.nip = t_pns.nip');
        $this->db->where('status', 'Validasi Pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function proses_pengajuan()
    {
        $this->db->select('*', 'nama');
        $this->db->from('t_pengajuan');
        $this->db->join('t_pns', 't_pns.nip = t_pengajuan.nip');
        $this->db->where('status', 'Proses Pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
