<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class promomodel extends CI_Model {

    protected $table = 'promo';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_promo_with_kategori()
    {
        $this->db->select('promo.*, kategori.nama_kategori');
        $this->db->from($this->table);
        $this->db->join('kategori', 'kategori.id = promo.kategori_id', 'left');
        return $this->db->get()->result();
    }

    public function insert_data($data)
    {
        if (!empty($data['id'])) {
            // update jika id tersedia
            $this->db->where('id', $data['id']);
            return $this->db->update($this->table, $data);
        } else {
            // insert baru
            return $this->db->insert($this->table, $data);
        }
    }

    public function delete_data($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
