<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // haji

    public function haji()
    {
        $data['tittle'] = "Paket Haji Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $where = [
            'kategori.name' => 'Haji Smart'
        ];
        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->row_array();

        $data['produkTanggal'] = $this->User_model->joinDataTanggal('produk', 'produktanggal', 'produk.id_produk=produktanggal.id_produk')->row_array();


        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/haji', $data);
        $this->load->view('templates/user_footer');
    }

    public function pesanPaketHaji($id_produk)
    {
        $data['tittle'] = "Paket Haji Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $where = [
            'kategori.name' => 'Haji Smart'
        ];
        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->row_array();
        $data['tanggal'] = $this->User_model->getData('produktanggal', ['id_produk' => $id_produk])->result_array();

        $this->form_validation->set_rules('jumbel', 'Jumbel', 'required|trim', [
            'required' => 'Masukkan Jumlah Tiket Yang Ingin Dibeli'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
            'required' => 'Massukan Tanggal Keberangkatan'
        ]);

        if ($data['user'] == NULL) {
            $this->session->set_flashdata('message', '<script> alert("Silahkan Login Untuk Melakukan Pemesanan") </script>');
            redirect('produk/haji');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('produk/pesanPaketHaji', $data);
            $this->load->view('templates/user_footer');
        } else {
            $user = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
            $produk = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', ['id_produk' => $id_produk])->row_array();
            $subTotal = ($this->input->post('jumbel') * $produk['harga']);

            if ($produk['stok'] <= 0) {
                $this->session->set_flashdata('message', '<script> alert("Stok Tiket Habis") </script>');
                redirect('produk/haji');
            }

            if ($this->input->post('jumbel') >= $produk['stok']) {
                $this->session->set_flashdata('message', '<script> alert("Pembelian Tiket Melebihi Stok Tiket") </script>');
                redirect('produk/umroh');
            }

            $data = [
                'user' => $user['email'],
                'id_produk' => $produk['id_produk'],
                'id_kat' => $produk['id_kat'],
                'kategori' => $produk['name'],
                'namaPaket' => $produk['nama'],
                'jumbel' => $this->input->post('jumbel'),
                'hargaPaket' => $produk['harga'],
                'tanggal' => $this->input->post('tanggal'),
                'tanggal_pemesanan' => date('d F Y'),
                'total' => $subTotal
            ];

            $this->session->set_userdata('keranjang', $data);
            $this->session->set_flashdata('message', '<script> alert("Pembelian Anda Berhasil, Silahkan Check Keranjang") </script>');
            redirect('produk/keranjang');
        }
    }

    // umroh
    public function umroh()
    {
        $data['tittle'] = "Paket Umroh Qonita Travel";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $where = [
            'kategori.name' => 'Umroh'
        ];

        $data['produk'] = $this->User_model->like('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/umroh', $data);
        $this->load->view('templates/user_footer');
    }

    public function detailPaketUmroh($id_produk)
    {
        $data['tittle'] = "Paket Umroh Qonita Travel";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $where = [
            'produk.id_produk' => $id_produk
        ];

        $data['tanggal'] = $this->User_model->getData('produktanggal', ['id_produk' => $id_produk])->row_array();
        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/detailPaketUmroh', $data);
        $this->load->view('templates/user_footer');
    }

    public function pesanPaketUmroh($id_produk)
    {
        $data['tittle'] = "Paket Umroh Qonita Travel";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', ['id_produk' => $id_produk])->row_array();
        $data['tanggal'] = $this->User_model->getData('produktanggal', ['id_produk' => $id_produk])->result_array();

        $this->form_validation->set_rules('jumbel', 'Jumbel', 'required|trim', [
            'required' => 'Masukkan Jumlah Tiket Yang Ingin Dibeli'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
            'required' => 'Massukan Tanggal Keberangkatan'
        ]);

        if ($data['user'] == NULL) {
            $this->session->set_flashdata('message', '<script> alert("Silahkan Login Untuk Melakukan Pemesanan") </script>');
            redirect('produk/umroh');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('produk/pesanPaketUmroh', $data);
            $this->load->view('templates/user_footer');
        } else {
            $user = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
            $produk = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', ['id_produk' => $id_produk])->row_array();
            $subTotal = ($this->input->post('jumbel') * $produk['harga']);

            if ($produk['stok'] <= 0) {
                $this->session->set_flashdata('message', '<script> alert("Stok Tiket Habis") </script>');
                redirect('produk/umroh');
            }

            if ($this->input->post('jumbel') >= $produk['stok']) {
                $this->session->set_flashdata('message', '<script> alert("Pembelian Tiket Melebihi Stok Tiket") </script>');
                redirect('produk/umroh');
            }

            $data = [
                'user' => $user['email'],
                'id_produk' => $produk['id_produk'],
                'id_kat' => $produk['id_kat'],
                'kategori' => $produk['name'],
                'namaPaket' => $produk['nama'],
                'jumbel' => $this->input->post('jumbel'),
                'hargaPaket' => $produk['harga'],
                'tanggal' => $this->input->post('tanggal'),
                'tanggal_pemesanan' => date('d F Y'),
                'total' => $subTotal
            ];

            $this->session->set_userdata('keranjang', $data);
            $this->session->set_flashdata('message', '<script> alert("Pembelian Anda Berhasil, Silahkan Check Keranjang") </script>');
            redirect('produk/keranjang');
        }
    }

    // tour
    public function tour()
    {
        $data['tittle'] = "Paket Tour Qonita Travel";
        $data['css'] = "produk/tour.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

        $where = [
            'kategori.name' => 'Tour'
        ];

        $data['produk'] = $this->User_model->like('produk', 'kategori', 'produk.id_kat = kategori.id_kat', $where)->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/tour', $data);
        $this->load->view('templates/user_footer');
    }

    public function detailPaketTour($id_produk)
    {
        $data['tittle'] = "Paket Tour Qonita Travel";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', [' email ' => $this->session->userdata('email')])->row_array();

        $where = [
            'produk.id_produk' => $id_produk
        ];

        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat = kategori.id_kat', $where)->row_array();
        $data['tanggal'] = $this->User_model->getData('produktanggal', ['id_produk' => $id_produk])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/detailPaketTour', $data);
        $this->load->view('templates/user_footer');
    }

    public function pesanPaketTour($id_produk)
    {
        $data['tittle'] = "Paket Tour Qonita Travel";
        $data['css'] = "produk/tour.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat = kategori.id_kat', ['id_produk' => $id_produk])->row_array();
        $data['tanggal'] = $this->User_model->getData('produktanggal', ['id_produk' => $id_produk])->result_array();

        $this->form_validation->set_rules('jumbel', 'Jumbel', 'required|trim', [
            'required' => 'Masukkan Jumlah Tiket Yang Ingin Dibeli'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
            'required' => 'Massukan Tanggal Keberangkatan'
        ]);

        if ($data['user'] == NULL) {
            $this->session->set_flashdata('message', '<script> alert("Silahkan Login Untuk Melakukan Pemesanan") </script>');
            redirect('produk/tour');
        }

        if ($this->input->post('jumbel') >= $produk['stok']) {
            $this->session->set_flashdata('message', '<script> alert("Pembelian Tiket Melebihi Stok Tiket") </script>');
            redirect('produk/umroh');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('produk/pesanPaketTour', $data);
            $this->load->view('templates/user_footer');
        } else {
            $user = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
            $produk = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', ['id_produk' => $id_produk])->row_array();
            $subTotal = ($this->input->post('jumbel') * $produk['harga']);

            if ($produk['stok'] <= 0) {
                $this->session->set_flashdata('message', '<script> alert("Stok Tiket Habis") </script>');
                redirect('produk/tour');
            }

            $data = [
                'user' => $user['email'],
                'id_produk' => $produk['id_produk'],
                'id_kat' => $produk['id_kat'],
                'kategori' => $produk['name'],
                'namaPaket' => $produk['nama'],
                'jumbel' => $this->input->post('jumbel'),
                'hargaPaket' => $produk['harga'],
                'tanggal' => $this->input->post('tanggal'),
                'tanggal_pemesanan' => date('d F Y'),
                'total' => $subTotal
            ];

            $this->session->set_userdata('keranjang', $data);
            $this->session->set_flashdata('message', '<script> alert("Pembelian Anda Berhasil, Silahkan Check Keranjang") </script>');
            redirect('produk/keranjang');
        }
    }

    // tabungan
    public function tabungan()
    {
        $data['tittle'] = "Paket Tabungan Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $where = [
            'kategori.name' => 'Tabungan'
        ];
        $data['produk'] = $this->User_model->like('produk', 'kategori', 'produk.id_kat = kategori.id_kat', $where)->result_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/tabungan', $data);
        $this->load->view('templates/user_footer');
    }

    public function detailPaketTabungan($id_produk)
    {
        $data['tittle'] = "Paket Tabungan Qonita Travel";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', [' email ' => $this->session->userdata('email')])->row_array();
        $where = [
            'produk.id_produk' => $id_produk
        ];
        $data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat = kategori.id_kat', $where)->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/detailPaketTabungan', $data);
        $this->load->view('templates/user_footer');
    }


    // pemesanan

    public function keranjang()
    {

        $data['tittle'] = "Keranjang Pemesanan";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['keranjang'] = $this->session->userdata('keranjang');

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('produk/keranjang', $data);
        $this->load->view('templates/user_footer');
    }

    public function lanjutPesan()
    {
        $data['tittle'] = "Detail Pemesanan";
        $data['css'] = "produk/umroh.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['keranjang'] = $this->session->userdata('keranjang');
        $tokenPembayaran = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ123456789';
        $tokenPembayaran = str_shuffle($tokenPembayaran);
        $data['tokenPembayaran'] = substr($tokenPembayaran, 0, 5);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Harus Diisi'
        ]);
        $this->form_validation->set_rules('kodevalidasi', 'Kode Validasi', 'required|trim');
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim|matches[kodevalidasi]', [
            'required' => 'Kode Harus Diisi',
            'matches' => 'Kode Tidak Sesuai'
        ]);

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Detail Pemesanan";
            $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['keranjang'] = $this->session->userdata('keranjang');
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('produk/dataDiri', $data);
            $this->load->view('templates/user_footer');
        } else {
            $keranjang = $this->session->userdata('keranjang');
            $id_produk = ($keranjang['id_produk']);
            $user = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
            $produk = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', ['id_produk' => $id_produk])->row_array();
            $tglBerangkat = $data['tanggal'] = $this->User_model->getData('produktanggal', ['id_produk' => $id_produk])->row_array();

            // pembelian 1 org
            $pembelian = [
                'id_pembelian' => $this->Produk_model->kode_otomatis_pembelian(),
                'id_produk' => $keranjang['id_produk'],
                'id_user' => $user['id_user'],
                'tgl_pembelian' => date('y-m-d', strtotime($keranjang['tanggal_pemesanan'])),
                'total_pembelian' => $keranjang['total'],
                'status_pembelian' => 'Pending',
                // 'resi_pembelian' => '',
                'kode_pembelian' => $this->input->post('kode')
            ];

            // pembelian lebih dari 1 org
            for ($i = 0; $i < $keranjang['jumbel']; $i++) {
                $detailpembelian[$i] = [];
                $detailpembelian[$i]['id_detailpembelian'] = $this->Produk_model->kode_otomatis_detailpembelian();
                $detailpembelian[$i]['id_pembelian'] = $this->Produk_model->kode_otomatis_pembelian();
                $detailpembelian[$i]['id_produk'] = $keranjang['id_produk'];
                $detailpembelian[$i]['namaPaket'] = $keranjang['namaPaket'];
                $detailpembelian[$i]['hargaPaket'] = $keranjang['hargaPaket'];
                $detailpembelian[$i]['jumbel'] = $keranjang['jumbel'];
                $detailpembelian[$i]['namaPenumpang'] = $this->input->post('nama')[$i];
                $detailpembelian[$i]['nikPenumpang'] =  $this->input->post('nik')[$i];
                $detailpembelian[$i]['telfPenumpang'] =  $this->input->post('telf')[$i];
                $detailpembelian[$i]['tglBerangkat'] = $tglBerangkat['tanggal'];
            }

            // update stok
            $where = array('id_produk' => $keranjang['id_produk']);
            $sisaStok = $produk['stok'] - $keranjang['jumbel'];
            $data = [
                'stok' => $sisaStok
            ];

            $id = $this->Produk_model->insertPembelian($pembelian, $detailpembelian);
            $this->Produk_model->updateStok('produk', $data, $where);
            $this->session->set_flashdata('message', '<script> alert("Pembelian Anda Berhasil, Silahkan Lakukan pembayaran") </script>');
            redirect('produk/nota/' . $id);
        }
    }

    public function batalPesan()
    {
        $this->session->unset_userdata('keranjang');
        $this->session->set_flashdata('message', '<script> alert("Pemesanan Di Batalkan") </script>');
        redirect('beranda');
    }

    // pembayaran

    public function nota($id)
    {

        $data['tittle'] = "Nota Pemesanan Qonita Travel";
        $data['css'] = "produk/nota.css";
        $data['js'] = "pembayaran/nota.js";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        $w = ['detailpembelian.id_pembelian' => $id];
        $where = ['pembelian.id_pembelian' => $id];

        //$data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->row_array();
        $data['pembelian'] = $this->Produk_model->joinDataWhere('pembelian', 'produk', 'pembelian.id_produk=produk.id_produk', $where)->row_array();
        $data['detailpembelian'] = $this->Produk_model->joinDataWhere('detailpembelian', 'pembelian', 'detailpembelian.id_pembelian=pembelian.id_pembelian', $w)->row_array();
        $data['detailpembelian2'] = $this->Produk_model->joinDataWhere('detailpembelian', 'pembelian', 'detailpembelian.id_pembelian=pembelian.id_pembelian', $w)->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('pembayaran/nota.php', $data);
        $this->load->view('templates/user_footer');
    }

    public function pembayaran($id)
    {
        $data['tittle'] = "Pembayaran Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        $where = ['pembelian.id_pembelian' => $id];
        $data['pembelian'] = $this->Produk_model->getdata('pembelian', $where)->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus Diisi'
        ]);
        $this->form_validation->set_rules('bank', 'Bank', 'required|trim|min_length[3]', [
            'required' => 'Nama Bank Harus Diisi',
            'min_length' => 'Adanya Kesalahan Pengisian Nama Bank'
        ]);
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|numeric|min_length[6]', [
            'required' => 'Jumlah Pembayaran Yang Di Transfer Harus Diisi',
            'numeric' => 'Jumlah Pembayaran Yang Diisi Hanya Angka',
            'min_length' => 'Adanya Kesalahan Pengisian Jumlah Pembayaran'
        ]);
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('bukti', 'Bukti Pembayaran', 'required|trim', [
            'required' => 'Bukti Pembayaran Harus Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('pembayaran/pembayaran.php', $data);
            $this->load->view('templates/user_footer');
        } else {
            // gambar
            $upload_bukti = $_FILES['bukti']['name'];

            if ($upload_bukti) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/pembayaran/';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('bukti')) {
                    $bukti_baru = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<script> alert("Yang Anda Upload Bukan Gambar") </script>');
                    redirect('user/riwayatTransaksi');
                }
            }
            $pembayaran = [
                'id_pembayaran' => $this->Produk_model->kode_otomatis_pembayaran(),
                'id_pembelian' => $this->input->post('id_pembelian'),
                'nama_penyetor' => $this->input->post('nama'),
                'bank' => $this->input->post('bank'),
                'jumlah_pembayaran' => $this->input->post('jumlah'),
                'tanggal_pembayaran' => date('Y-m-d'),
                'bukti_pembayaran' => $bukti_baru,
                'kode_pembayaran' => $this->input->post('kode')
            ];

            $this->Produk_model->insertData('pembayaran', $pembayaran);
            $this->Produk_model->updateStatus('pembelian', ['Status_pembelian' => 'Paid'], ['id_pembelian' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Pembayaran Berhasil <strong>Silahkan Tunggu Konfirmasi!</strong>
			</div>');
            redirect('user/riwayatTransaksi');
        }
    }

    public function detailPembayaran($id)
    {
        $data['tittle'] = "Detail Pembayaran Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        $where = ['pembayaran.id_pembelian' => $id];
        $data['pembayaran'] = $this->Produk_model->getdata('pembayaran', $where)->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('pembayaran/detailPembayaran.php', $data);
        $this->load->view('templates/user_footer');
    }

    public function ubahPembayaran()
    {
        $data['tittle'] = "Pembayaran Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        $where = ['pembelian.id_pembelian' => $id];
        $data['pembelian'] = $this->Produk_model->getdata('pembelian', $where)->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('bank', 'Bank', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('pembayaran/pembayaran.php', $data);
            $this->load->view('templates/user_footer');
        } else {
            // gambar
            $upload_bukti = $_FILES['bukti']['name'];

            if ($upload_bukti) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/pembayaran/';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('bukti')) {
                    $gambarLama = $data['pembelian']['gambar'];
                    if ($gambarLama != 'photo_default.png') {
                        unlink(FCPATH . 'assets/img/pembayaran/' . $gambarLama);
                    }
                    $bukti_baru = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $pembayaran = [
                'id_pembelian' => $this->input->post('id_pembelian'),
                'nama_penyetor' => $this->input->post('nama'),
                'bank' => $this->input->post('bank'),
                'jumlah_pembayaran' => $this->input->post('jumlah'),
                'tanggal_pembayaran' => date('Y-m-d'),
                'bukti_pembayaran' => $bukti_baru,
                'kode_pembayaran' => $this->input->post('kode')
            ];

            $this->Produk_model->updateData('pembayaran', $pembayaran, ['id_pembelian' => $id]);
            $this->Produk_model->updateStatus('pembelian', ['Status_pembelian' => 'Paid'], ['id_pembelian' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Pembayaran Berhasil <strong>Silahkan Tunggu Konfirmasi!</strong>
			</div>');
            redirect('user/riwayatTransaksi');
        }
    }

    public function cetakNota()
    {
        $data['tittle'] = "Nota Pemesanan Qonita Travel";
        $data['css'] = "produk/nota.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        $w = ['detailpembelian.id_pembelian' => $id];
        $where = ['pembelian.id_pembelian' => $id];
        //$data['produk'] = $this->User_model->joinData('produk', 'kategori', 'produk.id_kat=kategori.id_kat', $where)->row_array();
        $data['pembelian'] = $this->Produk_model->joinDataWhere('pembelian', 'produk', 'pembelian.id_produk=produk.id_produk', $where)->row_array();
        $data['detailpembelian'] = $this->Produk_model->joinDataWhere('detailpembelian', 'pembelian', 'detailpembelian.id_pembelian=pembelian.id_pembelian', $w)->row_array();
        $data['detailpembelian2'] = $this->Produk_model->joinDataWhere('detailpembelian', 'pembelian', 'detailpembelian.id_pembelian=pembelian.id_pembelian', $w)->result_array();

        $html = $this->load->view('pembayaran/hasilNota', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    // user
    public function userLogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Qonita Haji Tour And Travel";
            $data['css'] = "home/home.css";
            $data['msg'] = $this->session->flashdata('message');
            $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();

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
}
