<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Career_model');
    }

    public function index()
    {
        $data['query'] = $this->Career_model->get_all();
        //$this->load->view('tabletest', $data);
        //$this->load->view('template-app', $data);
        //$this->load->view('testws', $data);
        //$this->load->view('testview', $data);
        $this->load->view('testviewh', $data);
    }
}