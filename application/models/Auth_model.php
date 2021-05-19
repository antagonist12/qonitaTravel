<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function getAllData($table)
    {
        return $this->db->get($table);
    }

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

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function kode_otomatis_token()
    {
        $this->db->select('right (id_token,2) as kode ', false);
        $this->db->order_by('id_token', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('token');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodejadi = 'TKN' . $kodemax;

        return $kodejadi;
    }
}
