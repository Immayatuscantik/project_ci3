<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Adminmodel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // Ambil data admin berdasarkan username
    public function findByUsername($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('admin')->row_array();
    }

    // Tambahkan admin baru
    public function insertAdmin($data)
    {
        return $this->db->insert('admin', $data);
    }

    // Update data admin
    public function updateAdmin($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('admin', $data);
    }

    // Hapus admin
    public function deleteAdmin($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('admin');
    }
}
