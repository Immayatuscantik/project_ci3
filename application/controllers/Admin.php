<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Admin extends CI_Controller {
    
    public function index()
    {

    //    $data['ceklogin'] = $this->doLogin();
        $this->load->view('/admin/login');
        
    }
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function doLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi sederhana
        if ($username == 'admin' && $password == 'admin123') {
            $this->session->set_userdata('isLoggedIn', true);
            redirect('Kategoricontroller'); // ganti sesuai controller dashboard kamu
        } else {
            $this->session->set_flashdata('error', 'username atau password salah.');
            redirect('admin/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
