<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['tittle'] = 'Admin Dashboard';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['jumlahUser'] = $this->Admin_model->getAllData('users')->num_rows();
		$data['jumlahProduk'] = $this->Admin_model->getAllData('produk')->num_rows();
		$data['jumlahPembelian'] = $this->Admin_model->getAllData('pembelian')->num_rows();
		$data['jumlahPembelianLunas'] = $this->Admin_model->getData('pembelian', ['status_pembelian' => 'Lunas'])->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	// Admin Menu
	public function registration()
	{
		// pembuatan rules untuk form validation
		$this->form_validation->set_rules('name', 'Name', 'required|trim', [
			'required' => 'Nama Harus Diisi.'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
			'required' => 'Email Harus Diisi.',
			'is_unique' => "Email Sudah Terdaftar."
		]);
		$this->form_validation->set_rules('telp', 'telp', 'required|trim|numeric|min_length[11]|max_length[14]', [
			'required' => 'No. Telp Harus Diisi.',
			'min_length' => 'No. Telp Terlalu Pendek',
			'max_length' => "No. Telp Terlalu Panjang."
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'required' => 'Password Harus Diisi.',
			'matches' => "Password Tidak Sama",
			'min_length' => "Password Terlalu Pendek"
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
			'required' => 'Ulangi Password Harus Diisi.',
			'matches' => "Password Tidak Sama"
		]);

		if ($this->form_validation->run() == false) {
			$data['tittle'] = 'Qonita Travel Daftar Admin';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('admin/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'id_admin' => $this->Admin_model->kode_otomatis_admin(),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'is_active' => 1,
				'date_created' => date('Y-m-d'),
				'role' => 'Admin',
				'no_telp' => htmlspecialchars($this->input->post('telp', true))
			];
			$this->Admin_model->insertData('admin', $data);
			$this->session->set_flashdata('message', '<script> alert("Admin Baru Berhasil Ditambahkan") </script>');
			redirect('admin');
		}
	}

	public function profile()
	{
		$data['tittle'] = 'Admin Profile';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('templates/footer');
	}

	public function editProfile()
	{
		$data['tittle'] = 'Edit Profile Admin';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim', [
			'required' => 'Nama Harus Diisi'
		]);
		$this->form_validation->set_rules('telp', 'telp', 'required|trim|numeric|min_length[11]|max_length[14]', [
			'required' => 'No. Telp Harus Diisi.',
			'min_length' => 'No. Telp Terlalu Pendek',
			'max_length' => "No. Telp Terlalu Panjang."
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/editProfile', $data);
			$this->load->view('templates/footer');
		} else {
			$w = $this->session->userdata('id_admin');
			$where = array('id_admin' => $w);
			$nama = $this->input->post('name');
			$telp = $this->input->post('telp');

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
					$this->Admin_model->updateDataProfile('admin', $data, $where, $gambar);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = [
				'name' => htmlspecialchars($nama),
				'no_telp' => htmlspecialchars($telp)
			];

			$this->Admin_model->updateDataProfile('admin', $data, $where, $gambar = null);
			$this->session->set_flashdata('message', '<script> alert("Profile Berhasil Diubah") </script>');
			redirect('admin/profile');
		}
	}

	public function gantiPassword()
	{
		$data['tittle'] = 'Change Password Admin';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('passwordLama', 'Password Lama', 'required|trim', [
			'required' => 'Password Lama Harus Diisi'
		]);
		$this->form_validation->set_rules('passwordBaru', 'Password Baru', 'required|trim|matches[passwordBaru2]', [
			'required' => 'Password Baru Harus Diisi',
			'matches' => 'Password Baru Tidak Sama'
		]);
		$this->form_validation->set_rules('passwordBaru2', 'Ulangi Password Baru', 'required|trim|matches[passwordBaru]', [
			'required' => 'Ulangi Password Baru Harus Diisi',
			'matches' => 'Password Baru Tidak Sama'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/gantiPassword', $data);
			$this->load->view('templates/footer');
		} else {
			$passwordLama = $this->input->post('passwordLama');
			$passwordBaru = $this->input->post('passwordBaru');
			if (!password_verify($passwordLama, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<script> alert("Password Lama Salah") </script>');
				redirect('admin/gantiPassword');
			} else {
				if ($passwordLama == $passwordBaru) {
					$this->session->set_flashdata('message', '<script> alert("Password Tidak Boleh Sama Dengan Password Lama") </script>');
					redirect('admin/gantiPassword');
				} else {
					//password benar
					$passwordHash = password_hash($passwordBaru, PASSWORD_DEFAULT);
					$w = $this->session->userdata('email');
					$where =  array('email' => $w);
					$data = [
						'password' => $passwordHash
					];
					$this->Admin_model->updateDataProfile('admin', $data, $where, $gambar = null);
					$this->session->set_flashdata('message', '<script> alert("Password Berhasil Diubah") </script>');
					redirect('admin/profile');
				}
			}
		}
	}

	// kategori
	public function kategori()
	{
		$data['tittle'] = 'Kategori Produk';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Admin_model->getAllData('kategori')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('templates/footer');
	}

	public function tambahKategori()
	{
		$data['tittle'] = 'Kategori Produk';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Admin_model->getAllData('kategori')->result_array();
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim|is_unique[kategori.name]', [
			'required' => 'Kategori Harus Diisi',
			'is_unique' => 'Kategori Sudah Terdaftar.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/kategori', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id_kat' => $this->Admin_model->kode_otomatis_kategori(),
				'name' => htmlspecialchars(ucfirst($this->input->post('kategori')))
			];

			$this->Admin_model->insertData('kategori', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Kategori Baru Berhasil <strong>Ditambahkan!</strong>
			</div>');
			redirect('admin/kategori');
		}
	}

	public function hapusKategori($id_kat)
	{
		$where = array('id_kat' => $id_kat);

		$this->Admin_model->deleteData($where, 'kategori');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Kategori Berhasil <strong>Dihapus!</strong>
					</div>');
		redirect('admin/kategori');
	}

	public function ubahKategori($id_kat)
	{
		$data['tittle'] = 'Ubah Kategori Produk';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Admin_model->getData('kategori', ['id_kat' => $id_kat])->row_array();

		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim|is_unique[kategori.name]', [
			'required' => 'Kategori Harus Diisi',
			'is_unique' => 'Kategori Sudah Terdaftar.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/ubahKategori', $data);
			$this->load->view('templates/footer');
		} else {
			$where = array('id_kat' => $id_kat);
			$data = [
				'name' => htmlspecialchars(ucfirst($this->input->post('kategori')))
			];
			$this->Admin_model->updateDataKategori('kategori', $data, $where);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Kategori Berhasil <strong>Diubah!</strong>
			</div>');
			redirect('admin/kategori');
		}
	}

	// produk
	public function produk()
	{
		$data['tittle'] = 'Daftar Paket';
		$data['css'] = "admin/produk.css";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Admin_model->joinDataASC('produk', 'kategori', 'produk.id_kat=kategori.id_kat')->result_array();



		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/produk', $data);
		$this->load->view('templates/footer');

		// pagination 
		// data['start']= this->uri->segment(3);
		// $this->admin_model->joinDataASClimit('produk','kategori','produk.id_kat=kategori.id_kat','$config['per_page']','$data['start']')->result_array();

		// $this->load->library('pagination');

		// $config['base_url'] = 'http://localhost/travelQonita/admin/produk';
		// $config['total_rows'] = this->admin_model->count('produk);
		// $config['per_page'] = 5;

		// styling pagination
		// $config[‘full_tag_open’] = ‘<nav"> <ul class="pagination justify-content-center">’;
		// $config[‘full_tag_close’] = ‘ </ul></nav">’;

		// $config[‘first_link’] = ‘First’;
		// $config[‘first_tag_open’] = ‘<li class="page-item">’;
		// $config[‘first_tag_close’] = ‘</li>’;

		// $config[‘last_link’] = Last;
		// $config[‘last_tag_open’] = ‘<li class="page-item">’;
		// $config[‘last_tag_close’] = ‘</li>’;

		// $config[‘next_link’] = &raquo;
		// $config[‘next_tag_open’] = ‘<li class="page-item">’;
		// $config[‘next_tag_close’] = ‘</li>’;

		// $config[‘prev_link’] = &laquo;
		// $config[‘prev_tag_open’] = ‘<li class="page-item">’;
		// $config[‘prev_tag_close’] = ‘</li>’;

		// $config[‘cur_tag_open’] = ‘<li class="page-item active"><a class="page-link" href="#">’;
		// $config[‘cur_tag_close’] = ‘</a></li>’;

		// $config[‘num_tag_open’] = ‘<li class="page-item">’;
		// $config[‘num_tag_close’] = ‘</li>’;

		// $config['attributes'] = array('class' => 'page-link');

		// $this->pagination->initialize($config);

	}

	public function detailProduk($id_produk)
	{
		$data['tittle'] = 'Detail Paket';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$where = ['produk.id_produk' => $id_produk];
		$data['produk'] = $this->Admin_model->joinDataWhere('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->row_array();
		$data['tanggal'] = $this->Admin_model->getData('produktanggal',  ['id_produk' => $id_produk])->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailProduk', $data);
		$this->load->view('templates/footer');
	}

	public function tambahProduk()
	{
		$data['tittle'] = 'Tambah Paket';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Admin_model->getAllData('kategori')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama Paket Harus Diisi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
			'required' => 'Kategori Harus Diisi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|trim', [
			'required' => 'Stok Harus Diisi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim', [
			'required' => 'Harga Harus Diisi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/tambahProduk', $data);
			$this->load->view('templates/footer');
		} else {

			// gambar
			$upload_gambar = $_FILES['gambar']['name'];

			if ($upload_gambar) {
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/produk/';

				$this->upload->initialize($config);

				if ($this->upload->do_upload('gambar')) {
					$gambar_baru = $this->upload->data('file_name');
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = [
				'id_produk' => $this->Admin_model->kode_otomatis_produk(),
				'id_kat' => $this->input->post('kategori'),
				'nama' => $this->input->post('nama'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'gambar' => $gambar_baru
			];

			$this->Admin_model->insertData('produk', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Paket Baru Berhasil <strong>Ditambahkan!</strong>
			</div>');
			redirect('admin/produk');
		}
	}

	public function ubahProduk($id_produk)
	{
		$data['tittle'] = 'Ubah Paket';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Admin_model->getData('produk', ['id_produk' => $id_produk])->row_array();
		$data['kategori'] = $this->Admin_model->getAllData('kategori')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama Paket Harus Di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
			'required' => 'Kategori Harus Di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|trim', [
			'required' => 'Stok Harus Di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim', [
			'required' => 'Harga Harus Di isi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/ubahProduk', $data);
			$this->load->view('templates/footer');
		} else {

			$where = array('id_produk' => $id_produk);
			// gambar
			$upload_gambar = $_FILES['gambar']['name'];

			if ($upload_gambar) {
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/produk/';

				$this->upload->initialize($config);

				if ($this->upload->do_upload('gambar')) {
					$gambarLama = $data['produk']['gambar'];
					if ($gambarLama != 'photo_default.png') {
						unlink(FCPATH . 'assets/img/produk/' . $gambarLama);
					}
					$gambar = $this->upload->data('file_name');
					$this->Admin_model->updateData('produk', $data, $where, $gambar);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = [

				'id_kat' => htmlspecialchars($this->input->post('kategori')),
				'nama' => htmlspecialchars(ucfirst($this->input->post('nama'))),
				'stok' => htmlspecialchars($this->input->post('stok')),
				'harga' => htmlspecialchars($this->input->post('harga')),

			];

			$this->Admin_model->updateData('produk', $data, $where, $gambar = null);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Produk Berhasil <strong>Diubah!</strong>
			</div>');
			redirect('admin/produk');
		}
	}

	public function hapusProduk($id_produk)
	{
		$where = array('id_produk' => $id_produk);

		$this->Admin_model->deleteData($where, 'produk');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Produk Berhasil <strong>Dihapus!</strong>
					</div>');
		redirect('admin/produk');
	}


	// keberangkatan

	public function keberangkatan()
	{
		$data['tittle'] = 'Daftar Keberangkatan';
		$data['css'] = "admin/produk.css";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['tanggal'] = $this->Admin_model->joinData('produktanggal', 'produk', 'produktanggal.id_produk=produk.id_produk')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/keberangkatan', $data);
		$this->load->view('templates/footer');
	}

	public function tambahTanggalProduk()
	{
		$data['tittle'] = 'Tambah Tanggal Keberangkatan';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Admin_model->getAllData('produk')->result_array();

		$this->form_validation->set_rules('produk', 'Produk', 'required|trim', [
			'required' => 'Paket Harus Dipilih'
		]);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
			'required' => 'Tanggal Keberangkatan Harus Diisi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/tambahTanggalProduk', $data);
			$this->load->view('templates/footer');
		} else {

			$data = [
				'id_tanggalberangkat' => $this->Admin_model->kode_otomatis_keberangkatan(),
				'id_produk' => $this->input->post('produk'),
				'tanggal' => $this->input->post('tanggal')
			];

			$this->Admin_model->insertData('produktanggal', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Tanggal Keberangkatan Berhasil <strong>Ditambahkan!</strong>
            </div>');
			redirect('admin/keberangkatan');
		}
	}

	public function ubahTanggal($id_tanggalberangkat)
	{
		$data['tittle'] = 'Ubah Tanggal Keberangkatan';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();

		$data['tanggal'] = $this->Admin_model->getData('produktanggal', ['id_tanggalberangkat' => $id_tanggalberangkat])->row_array();
		$data['produk'] = $this->Admin_model->joinData('produktanggal', 'produk', 'produktanggal.id_produk=produk.id_produk')->row_array();

		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
			'required' => 'Tanggal Keberangkatan Harus Diisi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/ubahTanggal', $data);
			$this->load->view('templates/footer');
		} else {

			$where = array('id_tanggalberangkat' => $id_tanggalberangkat);

			$data = [
				'tanggal' => htmlspecialchars($this->input->post('tanggal'))
			];

			$this->Admin_model->updateDataTanggal('produktanggal', $data, $where);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Tanggal Keberangkatan Berhasil <strong>Diubah!</strong>
            </div>');
			redirect('admin/keberangkatan');
		}
	}

	public function hapusTanggal($id_tanggalberangkat)
	{
		$where = array('id_tanggalberangkat' => $id_tanggalberangkat);

		$this->Admin_model->deleteData($where, 'produktanggal');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Tanggal Berhasil <strong>Dihapus!</strong>
					</div>');
		redirect('admin/keberangkatan');
	}

	// customer
	public function customer()
	{
		$data['tittle'] = 'Daftar Customer';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['customer'] = $this->Admin_model->getAllData('users')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/customer', $data);
		$this->load->view('templates/footer');
	}

	public function detailCust($id)
	{
		$data['tittle'] = 'Detail Customer';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['customer'] = $this->Admin_model->getData('users', ['id_user' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailCust', $data);
		$this->load->view('templates/footer');
	}

	public function hapusCust($id)
	{
		$where = array('id_user' => $id);

		$this->Admin_model->deleteData($where, 'users');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Customer Berhasil <strong>Dihapus!</strong>
					</div>');
		redirect('admin/customer');
	}

	// laporan

	public function lapTransaksi()
	{
		$data['tittle'] = 'Laporan Transaksi';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();


		$data['laporan'] = $this->Admin_model->joinData3('pembelian', 'users', 'produk', 'pembelian.id_user=users.id_user', 'pembelian.id_produk=produk.id_produk')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/lapTransaksi', $data);
		$this->load->view('templates/footer');
	}

	public function detailPembelian($id_pembelian)
	{
		$data['tittle'] = 'Detail Pembelian';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();

		$where = ['pembelian.id_pembelian' => $id_pembelian];
		$data['detailPembelian'] = $this->Admin_model->joinDataWhere('pembelian', 'detailpembelian', 'pembelian.id_pembelian=detailpembelian.id_pembelian', $where)->row_array();

		$data['detailPembelian2'] = $this->Admin_model->joinDataWhere('pembelian', 'detailpembelian', 'pembelian.id_pembelian=detailpembelian.id_pembelian', $where)->result_array();

		$data['jumlahBayar'] = $this->Admin_model->joinDataWhere('pembayaran', 'pembelian', 'pembayaran.id_pembelian=pembelian.id_pembelian', $where)->row_array();

		$w = ['pembelian.id_user' => $data['detailPembelian']['id_user']];
		$data['detailPembeli'] = $this->Admin_model->joinDataWhere('pembelian', 'users', 'pembelian.id_user=users.id_user', $where)->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailPembelian', $data);
		$this->load->view('templates/footer');
	}

	public function hapusPembelian($id_pembelian)
	{
		$where = array('id_pembelian' => $id_pembelian);

		$this->Admin_model->deleteData($where, 'pembelian');
		$this->Admin_model->deleteData($where, 'detailpembelian');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Pembelian Berhasil <strong>Dihapus!</strong>
					</div>');
		redirect('admin/lapTransaksi');
	}

	public function detailPembayaran($id_pembelian)
	{
		$data['tittle'] = 'Detail Pembayaran';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$where = ['pembelian.id_pembelian' => $id_pembelian];
		$data['detailPembayaran'] = $this->Admin_model->joinDataWhere('pembelian', 'pembayaran', 'pembelian.id_pembelian=pembayaran.id_pembelian', $where)->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailPembayaran', $data);
		$this->load->view('templates/footer');
	}

	public function ubahResi()
	{
		$this->input->post('id');
		// $this->input->post('resi');
		$this->input->post('status');

		// $this->form_validation->set_rules('resi', 'Resi', 'required|trim', [
		//     'required' => 'Resi Harus Diisi'
		// ]);
		$this->form_validation->set_rules('status', 'Status', 'required|trim', [
			'required' => 'Status Harus Di pilih'
		]);

		if ($this->form_validation->run()) {
			$where = array('id_pembelian' => $this->input->post('id'));
			$data = [
				'status_pembelian' => $this->input->post('status')
				// 'resi_pembelian' => $this->input->post('resi')
			];

			$this->Admin_model->updateDataResi('pembelian', $data, $where);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Status Pembayaran Berhasil <strong>Diupdate!</strong>
            </div>');
			redirect('admin/lapTransaksi');
		} else {
			$this->session->set_flashdata('message', '<script> alert("Salah Memasukkan Status Pembayaran") </script>');
			redirect('admin/lapTransaksi');
		}
	}

	// cetak laporan
	public function cetakLaporan()
	{
		$data['tittle'] = 'Cetak Laporan Transaksi';
		$data['css'] = "";
		$data['user'] = $this->Admin_model->getData('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['laporan'] = $this->Admin_model->getAllData('pembelian')->result_array();

		$this->form_validation->set_rules('date1', 'Date 1', 'required|trim', [
			'required' => 'Tanggal Pertama Harus Dipilih'
		]);
		$this->form_validation->set_rules('date2', 'Date 2', 'required|trim', [
			'required' => 'Tanggal Kedua Harus Dipilih'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/cetakLaporan', $data);
			$this->load->view('templates/footer');
		} else {
			$this->hasilLaporan();
		}
	}

	public function hasilLaporan()
	{
		$data['tittle'] = 'Laporan Transaksi';
		$dari = $this->input->post('date1');
		$sampai = $this->input->post('date2');
		$data['laporan'] = $this->db->query("SELECT * FROM pembelian pem, detailpembelian dp, produk prod, users u WHERE dp.id_produk=prod.id_produk AND pem.id_user=u.id_user AND pem.id_pembelian=dp.id_pembelian AND date(tgl_pembelian) >= '$dari' ")->result_array();

		$html = $this->load->view('admin/hasilLaporan', $data, true);
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
}
