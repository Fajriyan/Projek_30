<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Isi_Data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('M_Data', 'DataIsi');
    }

    public function index()
    {
        $data['Welcome'] = $this->DataIsi->Get_Data();
        $this->template->display('View_IsiData', $data);
    }
}
