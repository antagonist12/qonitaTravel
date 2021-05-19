<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_admin();
    }

    public function riwayatTransaksi()
    {
        $data['tittle'] = "Riwayat Transaksi";
        $data['css'] = "home/home.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['riwayat'] = $this->User_model->getData('pembelian', ['id_user' => $this->session->userdata('id_user')])->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/riwayatTransaksi', $data);
        $this->load->view('templates/user_footer');
    }

    public function profile()
    {
        $data['tittle'] = "Profile Member";
        $data['css'] = "user/user.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/user_footer');
    }

    public function gantiPassword()
    {
        $data['tittle'] = "Ganti Password Member";
        $data['css'] = "user/user.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('passwordLama', 'Password Lama', 'required|trim', [
            'required' => 'Password Sekarang Harus Diisi'
        ]);
        $this->form_validation->set_rules('passwordBaru', 'Password Baru', 'required|trim|matches[passwordBaru2]|min_length[4]|max_length[30]', [
            'required' => 'Password Baru Harus Diisi',
            'matches' => 'Password Baru Tidak Sama',
            'max_length' => 'Password Baru Terlalu Panjang',
            'min_length' => 'Password Baru Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('passwordBaru2', 'Ulangi Password Baru', 'required|trim|matches[passwordBaru]', [
            'matches' => 'Ulangi Password Baru Tidak Sama',
            'required' => 'Ulangi Password Baru Harus Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/gantiPassword', $data);
            $this->load->view('templates/user_footer');
        } else {
            $passwordLama = $this->input->post('passwordLama');
            $passwordBaru = $this->input->post('passwordBaru');
            if (!password_verify($passwordLama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<script> alert("Password Lama Salah") </script>');
                redirect('user/gantiPassword');
            } else {
                if ($passwordLama == $passwordBaru) {
                    $this->session->set_flashdata('message', '<script> alert("Password Tidak Boleh Sama Dengan Password Lama") </script>');
                    redirect('user/gantiPassword');
                } else {
                    //password benar
                    $passwordHash = password_hash($passwordBaru, PASSWORD_DEFAULT);
                    $w = $this->session->userdata('email');
                    $where =  array('email' => $w);
                    $data = [
                        'password' => $passwordHash
                    ];
                    $this->User_model->updateData('users', $data, $where, $gambar = null);
                    $this->session->set_flashdata('message', '<script> alert("Password Berhasil Diubah") </script>');
                    redirect('user/profile');
                }
            }
        }
    }

    public function gantiProfile()
    {
        $data['tittle'] = "Ganti Profile Member";
        $data['css'] = "user/user.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus Diisi'
        ]);
        $this->form_validation->set_rules('telf', 'Telf', 'required|trim|min_length[11]|max_length[14]|numeric', [
            'required' => 'No. Telfon Harus Diisi',
            'numeric' => 'No. Telfon Hanya Diisi Angka',
            'min_length' => 'Adanya Kesalahan Pengisian No. Telfon'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Harus Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/gantiProfile', $data);
            $this->load->view('templates/user_footer');
        } else {
            $w = $this->session->userdata('id_user');
            $where = array('id_user' => $w);
            $nama = $this->input->post('nama');
            $telf = $this->input->post('telf');
            $alamat = $this->input->post('alamat');

            //jika ada gambar yang di upload
            $upload_foto = $_FILES['gambar']['name'];

            if ($upload_foto) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    $gambarLama = $data['user']['image'];
                    if ($gambarLama != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $gambarLama);
                    }
                    $gambar = $this->upload->data('file_name');
                    $this->User_model->updateData('users', $data, $where, $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'name' => htmlspecialchars($nama),
                'no_telf' => htmlspecialchars($telf),
                'alamat' => htmlspecialchars($alamat),
            ];

            $this->Admin_model->updateData('users', $data, $where, $gambar = null);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Profile Berhasil <strong>Diubah!</strong>
			</div>');
            redirect('user/profile');
        }
    }

    // ketentuan

    public function legalitas()
    {
        $data['tittle'] = "Legalitas Qonita Tour And Travel";
        $data['css'] = "home/home.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/legalitas', $data);
        $this->load->view('templates/user_footer');
    }

    public function syaratdanketentuan()
    {
        $data['tittle'] = "Syarat Dan Ketentuan Qonita Tour And Travel";
        $data['css'] = "home/home.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/syaratdanketentuan', $data);
        $this->load->view('templates/user_footer');
    }

    public function ketentuanpembayaran()
    {
        $data['tittle'] = "Ketentuan Pembayaran Qonita Tour And Travel";
        $data['css'] = "home/home.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/ketentuanpembayaran', $data);
        $this->load->view('templates/user_footer');
    }

    public function kantorcabang()
    {
        $data['tittle'] = "Kantor Cabang Qonita Tour And Travel";
        $data['css'] = "home/home.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/kantorcabang', $data);
        $this->load->view('templates/user_footer');
    }
}
