<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Edit_Data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('M_Edit');
    }

    function index()
    {
        $x['data'] = $this->M_Edit->show_barang();
        // $this->load->view('v_barang', $x);
        $this->template->display('user/view_EditData', $x);
    }

    function Simpan_Data()
    {
        $id = $this->input->post('id');
        $desa = $this->input->post('desa');
        $sembuh = $this->input->post('sembuh');
        $positif = $this->input->post('positif');
        $meninggal = $this->input->post('meninggal');
        $pdp = $this->input->post('pdp');
        $odp = $this->input->post('odp');
        $this->M_Edit->simpan_data($id, $desa, $sembuh, $positif, $meninggal, $pdp, $odp);
        redirect('Edit_Data');
    }

    function Edit_Data()
    {
        // $data = [
        //     'desa' => $this->input->post('desa'),
        //     'sembuh' => $this->input->post('sembuh'),
        //     'positif' => $this->input->post('positif'),
        //     'meninggal' => $this->input->post('meninggal'),
        //     'pdp' => $this->input->post('pdp'),
        //     'odp' => $this->input->post('odp')
        // ];
        $id = $this->input->post('id');
        $desa = $this->input->post('desa');
        $sembuh = $this->input->post('sembuh');
        $positif = $this->input->post('positif');
        $meninggal = $this->input->post('meninggal');
        $pdp = $this->input->post('pdp');
        $odp = $this->input->post('odp');
        $this->M_Edit->edit_data()($id, $desa, $sembuh, $positif, $meninggal, $pdp, $odp);

        // redirect('Edit_Data');
    }
    public function delete()
    {
        // $this->mahasiswa->delete_by_id($id);
        $this->M_Edit->Hapus_data($this->input->post('id'));
        redirect('Edit_Data');
    }
}
