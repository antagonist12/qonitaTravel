<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['tittle'] = "Qonita Haji Tour And Travel";
        $data['css'] = "home/home.css";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function userLogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Harus Diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Harus Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Qonita Haji Tour And Travel";
            $data['css'] = "home/home.css";
            $data['msg'] = $this->session->flashdata('message');
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('home/index', $data);
            $this->load->view('templates/user_footer');
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

    // about
    public function about()
    {
        $data['tittle'] = "Qonita Haji Tour And Travel";
        $data['css'] = "home/about.css";

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('home/about', $data);
        $this->load->view('templates/user_footer');
    }

    public function daftar()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus Diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'required' => 'E-mail Harus Diisi',
            'is_unique' => 'E-mail Sudah Terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password Harus Diisi',
            'matches' => 'Password Tidak Sesuai!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password]', [
            'required' => 'Konfirmasi Password Harus Diisi',
            'matches' => 'Konfirmasi Password Tidak Sesuai!'
        ]);
        $this->form_validation->set_rules('telf', 'Telf', 'required|trim|min_length[11]|max_length[14]', [
            'required' => 'No. Telf Harus Diisi',
            'min_length' => 'No. Telf Terlalu Pendek',
            'max_length' => 'No. Telf Terlalu Panjang'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[4]', [
            'required' => 'Alamat Harus Diisi',
            'min_length' => 'Alamat Kurang Lengkap'
        ]);

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Qonita Haji Tour And Travel";
            $data['css'] = "home/home.css";
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('home/daftar', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->User_model->insertUser();
            $this->session->set_flashdata('message', '<script> alert("User berhasil mendaftar, Silahkan Verifikasi Akun Anda Melalui E-Mail Terlebih Dahulu") </script>');
            redirect('beranda');
        }
    }

    public function verifikasi()
    {
        $this->User_model->verifikasiEmail();
    }


    // lupa password
    public function lupaPassword()
    {
        $data['tittle'] = "Lupa Password";
        $data['css'] = "home/home.css";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'E-Mail Harus Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('home/lupaPassword', $data);
            $this->load->view('templates/user_footer');
        } else {
            $email = $this->input->post('email');
            $where = array('email' => $email, 'is_active' => 1);
            $user = $this->User_model->getData('users', $where)->row_array();
            if ($user) {
                $this->User_model->lupaPassword();
                $this->session->set_flashdata('message', '<script>
				alert("Silahkan Cek Email Anda Untuk Lupa Password");
				</script>');
                redirect('beranda');
            } elseif ($user['is_active'] == 0) {
                $this->session->set_flashdata('message', '<script>
				alert("Email Belum Aktif");
				</script>');
                redirect('beranda/lupaPassword');
            } else {
                $this->session->set_flashdata('message', '<script>
				alert("Email Tidak Terdaftar");
				</script>');
                redirect('beranda/lupaPassword');
            }
        }
    }

    public function resetPassword()
    {

        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $where = array('email' => $email);
        $whereToken = array('token' => $token);
        $user = $this->User_model->getData('users', $where)->row_array();
        if ($user) {
            $user_token = $this->User_model->getData('token', $whereToken)->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<script> alert("Lupa Password Gagal Karena Token Salah") </script>');
                redirect('beranda');
            }
        } else {
            $this->session->set_flashdata('message', '<script> alert("Lupa Password Gagal Karena Email Salah") </script>');
            redirect('beranda');
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('beranda');
        }
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[4]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Ubah Password";
            $data['css'] = "home/home.css";
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('home/resetPassword');
            $this->load->view('templates/user_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $w = $this->session->userdata('reset_email');
            $where =  array('email' => $w);
            $gambar = null;
            $data = [
                'password' => $password
            ];

            $this->User_model->updateData('users', $data, $where, $gambar);
            $this->session->unset_userdata('reset_email');
            $this->User_model->deleteData($where, 'token');
            $this->session->set_flashdata('message', '<script> alert("Password Telah Dirubah Silahkan Login") </script>');
            redirect('beranda');
        }
    }
}
