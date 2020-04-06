<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('m_login', 'login');
    }

    public function index()
    {
        $this->template->display('user/view_contact');
    }
}
