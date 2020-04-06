<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Data extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function Get_Data()
    {
        return $this->db->get('data_isi')->result_array();
    }
}
