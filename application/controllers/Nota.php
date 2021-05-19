<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {
        $data['tittle'] = "Nota Pemesanan Qonita Travel";
        $data['css'] = "produk/haji.css";
        $data['user'] = $this->User_model->getData('users', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(2);
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
}
