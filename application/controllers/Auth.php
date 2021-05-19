<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('admin');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Email Harus Di Isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password Harus Di Isi'
		]);

		if ($this->form_validation->run() == false) {
			$data['tittle'] = 'Qonita Travel Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// validasi login success
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$where = array('email' => $email);

		$admin = $this->Auth_model->getData('admin', $where)->row_array();

		// jika user ada
		if ($admin) {
			// jika user aktif
			if ($admin['is_active'] == 1) {
				// cek password
				if (password_verify($password, $admin['password'])) {
					// set session ( ambil data yang bakalan di set)
					$data = [
						'id_admin' => $admin['id_admin'],
						'email' => $admin['email'],
						'name' => $admin['name'],
						'role' => $admin['role']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('message', '<script> alert("Selamat Datang ' . strtoupper($admin['name']) . '") </script>');
					redirect('admin');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Email / Password Anda Salah!
					</div>');
					redirect('auth');
				}
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email Tidak Ada!
			</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
		Anda Telah Logout
		</div>');
		redirect('auth');
	}

	// lupa password Admin
	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Email Harus Diisi'
		]);

		if ($this->form_validation->run() == false) {
			$data['tittle'] = 'Forgot Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/forgotpassword');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('email');
			$where = array('email' => $email, 'is_active' => 1);

			$user = $this->Auth_model->getData('admin', $where)->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$admin_token = [
					'id_token' => $this->Auth_model->kode_otomatis_token(),
					'email' => $email,
					'token' => $token,
				];
				$this->Auth_model->insertData('token', $admin_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Silahkan Cek Email Anda Untuk Reset Password
				</div>');
				redirect('auth/forgotpassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email Tidak Terdaftar
				</div>');
				redirect('auth/forgotpassword');
			}
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$where = array('email' => $email);
		$whereToken = array('token' => $token);

		$user = $this->Auth_model->getData('admin', $where)->row_array();

		if ($user) {
			$user_token = $this->Auth_model->getData('token', $whereToken)->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Reset Password Fail! Wrong Token
				</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Reset Password Fail! Wrong Email
			</div>');
			redirect('auth');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[4]|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['tittle'] = 'Change Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/changepassword');
			$this->load->view('templates/auth_footer');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

			$email = $this->session->userdata('reset_email');

			$data = array('password' => $password);
			$where = array('email' => $email);

			$this->Auth_model->updateData('admin', $data, $where);

			$this->session->unset_userdata('reset_email');

			$this->Auth_model->deleteData($where, 'token');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Password Telah Dirubah! Silahkan Login
			</div>');
			redirect('auth');
		}
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

		if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Click This Link To Reset Your Password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	// blocked Member
	public function blocked()
	{
		$this->load->view('auth/blocked');
	}

	// blocked Admin
	public function blockedd()
	{
		$this->load->view('auth/blockedd');
	}
}
