<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class kategoricontroller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategorimodel');
        $this->load->helper(array('form', 'url')); // agar form helper & redirect berfungsi
    }

    public function index()
    {
        $data['kategori'] = $this->kategorimodel->get_all(); // kita sesuaikan dengan fungsi CI3 di model
        $this->load->view('admin/kategori/index', $data);
    }

    public function create()
    {
        // Menampilkan form untuk menambah kategori
        $this->load->view('admin/kategori/create');
    }

    public function save()
    {
        $data = array(
            'id'            => $this->input->post('id'),
            'nama_kategori' => $this->input->post('nama'),
            'nomor_urut'    => $this->input->post('urutan'),
            'status'        => $this->input->post('status')
        );

        $this->kategorimodel->insert_data($data); // Fungsi insert_data harus dibuat di model
        redirect('kategoricontroller');
    }

    public function delete($id)
    {
        $this->kategorimodel->delete_data($id); // Fungsi delete_data harus dibuat di model
        redirect('kategoricontroller');
    }
}
