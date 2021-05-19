<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{

    public function getData($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function updateData($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function updateStok($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function updateStatus($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    // pembelian
    function insertPembelian($pembelian, $detailpembelian)
    {
        $this->db->trans_start();
        $this->db->insert('pembelian', $pembelian);
        $id_pembelian = $pembelian['id_pembelian'];
        $id_detailpembelian = $this->kode_otomatis_detailpembelian();
        // $detailpembelian['id_pembelian'] = $id_pembelian;

        for ($i = 0; $i < count($detailpembelian); $i++) {
            $detailpembelian[$i]['id_detailpembelian'] = $id_detailpembelian;
        }
        $this->db->insert_batch('detailpembelian', $detailpembelian);

        $this->db->trans_complete();
        return  $id_pembelian;
    }

    public function joinData($table1, $table2, $cond)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond);
        return $this->db->get();
    }

    public function joinDataWhere($table1, $table2, $cond, $where)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond)
            ->where($where);
        return $this->db->get();
    }


    function kode_otomatis_pembelian()
    {
        $this->db->select('right (id_pembelian,3) as kode ', false);
        $this->db->order_by('id_pembelian', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('pembelian');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'PEM' . $kodemax;

        return $kodejadi;
    }

    function kode_otomatis_detailpembelian()
    {
        $this->db->select('right (id_detailpembelian,3) as kode ', false);
        $this->db->order_by('id_detailpembelian', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('detailpembelian');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'DP' . $kodemax;

        return $kodejadi;
    }

    function kode_otomatis_pembayaran()
    {
        $this->db->select('right (id_pembayaran,3) as kode ', false);
        $this->db->order_by('id_pembayaran', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('pembayaran');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'BYR' . $kodemax;

        return $kodejadi;
    }
}
