<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('m_login', 'login');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $nama['nama'] = $data['user']['nama'];
        $this->template->display('user/view_beranda', $nama);
    }
}
