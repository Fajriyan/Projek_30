<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->library('form_validation');
        $this->load->model('m_login', 'login');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') != "") {
            $this->template->display('user/view_login');
        } else {
            $this->template->display('user/view_login');
        }
    }

    public function login_app()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Harus Di Isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus Di Isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->template->display('user/view_login');
        } else {
            $dt['username'] = $this->input->post('username');
            $dt['password'] = $this->input->post('password');
            $this->login->getLoginData($dt);
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        header('location:' . base_url() . '');
        redirect('login');
    }
}
