<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function insertUser()
    {

        $data = [
            'id_user' => $this->kode_otomatis_user(),
            'name' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.png',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'no_telf' => $this->input->post('telf'),
            'alamat' => $this->input->post('alamat'),
            'is_active' => 0,
            'date_created' => date('Y-m-d'),
            'role' => 'Member'
        ];

        $token = base64_encode(random_bytes(10));
        $user_token = [
            'id_token' => $this->kode_otomatis_token(),
            'email' => $this->input->post('email'),
            'token' => $token
        ];

        $this->db->insert('users', $data);
        $this->db->insert('token', $user_token);

        $this->_sendEmail($token, 'verifikasi');
    }

    public function lupaPassword()
    {
        $email = $this->input->post('email');
        $token = base64_encode(random_bytes(10));
        $user_token = [
            'id_token' => $this->kode_otomatis_token(),
            'email' => $email,
            'token' => $token,
        ];

        $this->db->insert('token', $user_token);

        $this->_sendEmail($token, 'forgot');
    }

    private function _sendEmail($token, $type)
    {

        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'qonitatourtravels@gmail.com',
            'smtp_pass' => 'qonitatravel12',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);
        $this->email->from('qonitatourtravels@gmail.com', 'Qonita Tour Travels');
        $this->email->to($this->input->post('email'));

        if ($type == 'verifikasi') {
            $this->email->subject('Aktifasi Akun');
            $this->email->message(

                'Assalamualaikum, Wr. Wb<br>
                Ayah Bunda.<br>
                Terima kasih ya telah bergabung dalam keluarga besar Qonita Tour & Travel.<br>
                Nah, untuk dapat mendaftar layanan kami, silahkan klik tombol/link berikut ya.<br>
                Klik Disini Untuk Verifikasi : <a href="' . base_url() . 'beranda/verifikasi?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifkan Akun</a><br><br>
                Salam hangat,<br>
                Management'

            );
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message(

                'Assalamualaikum, Wr. Wb <br>
                Ayah Bunda.<br>
                Terima kasih telah menggunakan layanan fitur lupa password
                Silahkan Klik Disini untuk mereset passwordnya.<br>
                Click This Link To Reset Your Password : <a href="' . base_url() . 'beranda/resetPassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a><br>
                Salam Hangat, <br>
                Management'

            );
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verifikasiEmail()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            $token = $this->db->get_where('token', ['token' => $token])->row_array();

            if ($token) {
                $this->db->set('is_active', 1);
                $this->db->where('email', $email);
                $this->db->update('users');

                $this->db->delete('token', ['email' => $email]);

                $this->session->set_flashdata('message', '<script> alert(" Akun Dengan ' . $email . ' Anda Sudah Aktif, Silahkan Login ") </script>');
                redirect('beranda');
            } else {
                $this->session->set_flashdata('message', '<script> alert("Aktifasi Gagal! Token Salah") </script>');
            }
        } else {
            $this->session->set_flashdata('message', '<script> alert("Aktifasi Gagal! Email Salah") </script>');
        }
    }

    public function loginUser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'name' => $user['name'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<script> alert("Selamat Datang ' . strtoupper($user['name']) . '") </script>');
                    redirect('beranda');
                } else {
                    $this->session->set_flashdata('message', '<script> alert("Email / Password Salah") </script>');
                    redirect('beranda');
                }
            } else {
                $this->session->set_flashdata('message', '<script> alert("Email Belum Di Aktifasi") </script>');
                redirect('beranda');
            }
        } else {
            $this->session->set_flashdata('message', '<script> alert("Email Tidak Terdaftar") </script>');
            redirect('beranda');
        }
    }

    public function logoutUser()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('name');
        $this->session->set_flashdata('message', '<script> alert("Sampai Jumpa Kembali") </script>');
        redirect('beranda');
    }

    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // produk

    public function getAllData($table)
    {
        return $this->db->get($table);
    }

    public function getData($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($table, $data, $where, $gambar)
    {
        if ($gambar) {
            $this->db->set('image', $gambar);
        } else {
            $this->db->update($table, $data, $where);
        }
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function joinData($table1, $table2, $cond, $where)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond)
            ->where($where);
        return $this->db->get();
    }

    public function joinDataTanggal($table1, $table2, $cond)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond);
        return $this->db->get();
    }

    public function like($table1, $table2, $cond, $where)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond)
            ->like($where);
        return $this->db->get();
    }

    // kode otomatis
    function kode_otomatis_user()
    {
        $this->db->select('right (id_user,3) as kode ', false);
        $this->db->order_by('id_user', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('users');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'USR' . $kodemax;

        return $kodejadi;
    }

    function kode_otomatis_token()
    {
        $this->db->select('right (id_token,3) as kode ', false);
        $this->db->order_by('id_token', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('token');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'TKN' . $kodemax;

        return $kodejadi;
    }
}
