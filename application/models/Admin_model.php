<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllData($table)
    {
        return $this->db->get($table);
    }

    public function getData($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    // pagination
    // public function joinDataASClimit($table1, $table2, $cond, $limit, $start)
    // {
    //     $this->db->select('*')
    //         ->from($table1)
    //         ->join($table2, $cond);
    //     $this->db->order_by('id_produk', 'ASC');
    //     return $this->db->get();
    // }
    // public function getdatalimit($table, $limit,$start){
    //     return $this->db->get($table, $limit, $start);
    // }

    // public function count($table){
    //     return $this->db->get($table)->num_rows();
    // }


    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function updateDataProfile($table, $data, $where, $gambar)
    {
        if ($gambar) {
            $this->db->set('image', $gambar);
        } else {
            $this->db->update($table, $data, $where);
        }
    }

    public function updateDataKategori($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function updateDataResi($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function updateDataTanggal($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function updateData($table, $data, $where, $gambar)
    {
        if ($gambar) {
            $this->db->set('gambar', $gambar);
        } else {
            $this->db->update($table, $data, $where);
        }
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function joinData($table1, $table2, $cond)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond);
        return $this->db->get();
    }

    public function joinData3($table1, $table2, $table3, $cond1, $cond2)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond1)
            ->join($table3, $cond2);
        return $this->db->get();
    }

    public function joinDataASC($table1, $table2, $cond)
    {
        $this->db->select('*')
            ->from($table1)
            ->join($table2, $cond);
        $this->db->order_by('id_produk', 'ASC');
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

    // kode otomatis

    function kode_otomatis_admin()
    {
        $this->db->select('right (id_admin,2) as kode ', false);
        $this->db->order_by('id_admin', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('admin');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodejadi = 'ADM' . $kodemax;

        return $kodejadi;
    }

    function kode_otomatis_kategori()
    {
        $this->db->select('right (id_kat,3) as kode ', false);
        $this->db->order_by('id_kat', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('kategori');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'KT' . $kodemax;

        return $kodejadi;
    }

    function kode_otomatis_keberangkatan()
    {
        $this->db->select('right (id_tanggalberangkat,3) as kode ', false);
        $this->db->order_by('id_tanggalberangkat', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('produktanggal');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'KB' . $kodemax;

        return $kodejadi;
    }

    function kode_otomatis_produk()
    {
        $this->db->select('right (id_produk,3) as kode ', false);
        $this->db->order_by('id_produk', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('produk');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = 'PR' . $kodemax;

        return $kodejadi;
    }
}
