<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactModel', 'bm');
    }
    public function index()
    {
        $this->load->model('ContactModel', 'pm');

        $data['allpelanggan'] = $this->bm->get_all_data_pelanggan();
        $data['title'] = "Contact";

        $this->load->view('templates/header', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('templates/footer');
    }

}
