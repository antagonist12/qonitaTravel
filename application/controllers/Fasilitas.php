<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['tittle'] = "Fasilitas";
        $data['css'] = "home/fasilitas.css";
        $data['js'] = "";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);;
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('home/fasilitas', $data);
        $this->load->view('templates/user_footer', $data);
    }

    public function userLogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Fasilitas";
            $data['css'] = "home/fasilitas.css";
            $data['js'] = "";
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/user_header', $data);;
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('home/fasilitas', $data);
            $this->load->view('templates/user_footer', $data);
        } else {
            // validasi login
            $this->_login();
        }
    }

    private function _login()
    {
        $this->User_model->loginUser();
    }

    public function logoutUser()
    {
        $this->User_model->logoutUser();
    }

    // public function daftar()
    // {

    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
    //         'is_unique' => 'E-mail Sudah Terdaftar'
    //     ]);
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
    //         'matches' => 'Password Tidak Sesuai!',
    //         'min_length' => 'Password Terlalu Pendek'
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
    //     $this->form_validation->set_rules('telf', 'Telf', 'required|trim');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

    //     if ($this->form_validation->run() == false) {
    //         $data['tittle'] = "Qonita Haji Tour And Travel";
    //         $data['css'] = "home/home.css";

    //         $this->load->view('templates/user_header', $data);
    //         $this->load->view('templates/user_topbar', $data);
    //         $this->load->view('home/daftar', $data);
    //         $this->load->view('templates/user_footer');
    //     } else {
    //         $this->User_model->insertUser();
    //         $this->session->set_flashdata('message', '<script> alert("Silahkan Verifikasi Akun Anda Terlebih Dahulu") </script>');
    //         redirect('beranda');
    //     }
    // }
}
