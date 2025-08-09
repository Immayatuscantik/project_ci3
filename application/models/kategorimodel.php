<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Kategorimodel extends CI_Model {

    protected $table = 'kategori';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert_data($data)
    {
        if (!empty($data['id'])) {
            // Update jika ada ID
            $this->db->where('id', $data['id']);
            return $this->db->update($this->table, $data);
        } else {
            // Insert baru
            return $this->db->insert($this->table, $data);
        }
    }

    public function delete_data($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
