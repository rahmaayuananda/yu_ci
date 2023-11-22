<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Pendafataran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_pendaftaran');
        $this->load->model('Formulir_model');
    }

    function index()
    {
        $this->load->library('');
        
    }
}