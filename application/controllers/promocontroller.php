<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class promocontroller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PromoModel');
        $this->load->model('KategoriModel');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['promo'] = $this->promomodel->get_promo_with_kategori(); // method ini harus dibuat di model
        $this->load->view('admin/promo/index', $data);
    }

    public function create()
    {
        $data['kategori'] = $this->kategorimodel->get_all(); // asumsi get_all ambil semua kategori
        $this->load->view('admin/promo/form', $data);
    }

    public function save()
    {
        // Handle file upload
        $flyerName = null;
        if (!empty($_FILES['flyer']['name'])) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('flyer')) {
                $uploadData = $this->upload->data();
                $flyerName = $uploadData['file_name'];
            }
        }

        $data = array(
            'id'             => $this->input->post('id'),
            'judul'          => $this->input->post('judul'),
            'deskripsi'      => $this->input->post('deskripsi'),
            'kategori_id'    => $this->input->post('kategori_id'),
            'tanggal_mulai'  => $this->input->post('tanggal_mulai'),
            'tanggal_akhir'  => $this->input->post('tanggal_akhir'),
            'flyer'          => $flyerName,
            'status'         => $this->input->post('status')
        );

        $this->promomodel->insert_data($data); // method insert_data dibuat di model
        redirect('promocontroller');
    }

    public function delete($id)
    {
        $this->promomodel->delete_data($id); // method delete_data dibuat di model
        redirect('promocontroller');
    }
}
