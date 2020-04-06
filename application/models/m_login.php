<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getLoginData($data)
    {
        $login['username'] = $data['username'];
        $login['password'] = $data['password'];
        $cek = $this->db->get_where('user', $login);
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $qad) {
                $sess_data['logged_in'] = 'AkuKamUKItadANMerEKaAJa';
                $sess_data['id'] = $qad->id;
                $sess_data['username'] = $qad->username;
                $sess_data['nama'] = $qad->nama;
                $sess_data['level'] = $qad->level;
                // $sess_data['ip_address'] = $this->input->ip_address();
                $this->session->set_userdata($sess_data);
            }
            if ($sess_data['level'] == '2') {
                redirect(base_url(''));
            } else if ($sess_data['level'] == '1') {
                redirect(base_url('Edit_Data'));
            } else {
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert 
            alert-warning" role="alert"> PASSWORD/ USERNAME SALAH </div>');
            header('location:' . base_url('Login') . '');
        }
    }
}
