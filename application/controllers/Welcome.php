<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('m_login', 'login');
		$this->load->model('M_Data', 'DataIsi');
	}

	public function index()
	{
		$data['Welcome'] = $this->DataIsi->Get_Data();
		$this->template->display('user/view_beranda', $data);
	}
}
