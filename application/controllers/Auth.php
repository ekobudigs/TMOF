<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Auth');
    }

    function index()
    {
        // checklog();
        $this->load->view('auth/login');
    }

    function ceklogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $login = $this->Model_Auth->getlogin($email, $password);
        $ceklogin = $login->num_rows();
        $datalogin = $login->row_array();
        $data = array(

            'id_user' => $datalogin['id_user'],
            'nama_lengkap' => $datalogin['nama_lengkap'],
            'email' => $datalogin['email'],
            'password' => $datalogin['password'],
            'level' => $datalogin['level']
        );
        $this->session->set_userdata($data);
        if ($ceklogin == 1) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('msg', '
            <div class="alert alert-warning" role="alert">
             email dan password Salah!
            </div> ');
            redirect('auth');
        }
    }
    function logout()
    {
        session_destroy();
        redirect('auth/login');
    }
}
