<?php
class M_Edit extends CI_Model
{

    function show_barang()
    {
        $hasil = $this->db->query("SELECT * FROM data_isi");
        return $hasil;
    }

    function simpan_data($id, $desa, $sembuh, $positif, $meninggal, $pdp, $odp)
    {
        $hasil = $this->db->query("INSERT INTO data_isi (id,desa,sembuh,positif,meninggal,pdp,odp) VALUES ('$id', '$desa', $sembuh, $positif, $meninggal, $pdp, $odp)");
        return $hasil;
    }

    function edit_data($id, $desa, $sembuh, $positif, $meninggal, $pdp, $odp)
    {
        $hasil = $this->db->query("UPDATE 'data_isi' SET 'desa'='$desa', 'sembuh'=$sembuh, 'positif'=$positif, 'meninggal'=$meninggal, 'pdp'=$pdp, 'odp'=$odp  WHERE 'id'='$id' ");
        return $hasil;
    }
    function Hapus_data($id)
    {
        $hasil = $this->db->query("DELETE FROM data_isi WHERE id='$id'");
        return $hasil;
    }
}
