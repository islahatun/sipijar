<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pns', 'pns');
    }

    public function index()
    {
        // $this->form_validation->set_rules('nip', Nip);
        // $this->form_validation->set_rules('sandi', 'Sandi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/a_header');
            $this->load->view('auth/login');
            $this->load->view('templates/a_footer');
        } else {
            //validasi sukses
            $nip = $this->input->post('nip');
            $sandi = $this->input->post('sandi');
            $user = $this->db->get_where('t_pns', ['nip' => $nip])->row_array();
            // jika user ada
            if ($user) {
                // jika user aktif
                if ($user['aktif'] == 1) {
                    // cek password yang sudah di hash
                    if (password_verify($sandi, $user['sandi'])) {
                        $data = [
                            'nip' => $user['nip'],
                            'nama' => $user['nama'],
                            'level' => $user['level']
                        ];
                        $this->session->set_userdata($data);
                        switch ($user['level']) {
                            case 'user';
                                redirect('User');
                                break;
                            case 'pimpinan';
                                redirect('Pimpinan');
                                break;
                            default:
                                redirect('Operator');
                                break;
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
                     <strong>Kata sandi salah</strong> 
                     </div>');
                        redirect('auth/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
                 <strong>pengguna tidak aktif</strong> 
                 </div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>NIK tidak terdaftar</strong> 
             </div>');
                redirect('auth/login');
            }
        }
    }
    public function regist()
    {
        $data['title'] = "Registrasi";

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('unit_kerja', 'jabatan', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Password', 'required|trim|min_length[3]|matches[sandi2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Minimal 3 Karakter'
        ]);
        $this->form_validation->set_rules('sandi2', 'Password', 'required|matches[sandi]');

        if ($this->form_validation->run() == false) {
            $this->load->view('Templates/a_header', $data);
            $this->load->view('Auth/regis');
            $this->load->view('Templates/a_footer');
        } else {
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');

            $user =  $this->db->get_where('t_pns', ['nip' => $nip])->row_array();
            // var_dump($user);
            // die;
            if ($user) {
                if ($user['nama'] == $nama) {
                    $this->pns->regis();
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show ml-1 mr-1" role="alert">
                    <strong>Registrasi Berhasil</strong> 
                    </div>');
                    redirect('Auth');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Nama tidak terdaftar</strong> 
                    </div>');
                    redirect('Auth/regist');
                }
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                   NIP TIDAK TERDAFTAR
                </div>
              </div>');
                redirect('Auth/regist');
            }
        }
    }
}
