<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel', 'bm');
    }
    public function index()
    {
        $this->load->model('HomeModel', 'pm');

        $data['allpelanggan'] = $this->bm->get_all_data_pelanggan();
        $data['title'] = "Home";

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

}
