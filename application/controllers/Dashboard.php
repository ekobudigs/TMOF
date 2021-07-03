<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Halaman Dashboard";
        $this->template->load('template/template', 'dashboard/dashboard', $data);
    }
}
