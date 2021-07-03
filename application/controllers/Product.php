<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Halaman Product";
        $this->template->load('template/template', 'product/index', $data);
    }
}
