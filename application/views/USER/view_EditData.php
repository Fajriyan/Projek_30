<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Data Barang</title>
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>DATA PER DESA <a href="<?= base_url('Edit_Data'); ?>" style="font-size: 20px">JAGA PACIRAN</a>
            <div class="pull-right"><a class="btn btn-block btn-outline-primary btn" data-toggle="modal" data-target="#modal_add_new"> TAMBAH DATA</a></div>
        </h1>

        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>DESA</td>
                    <td>SEMBUH</td>
                    <td>POSITIF</td>
                    <td>MENINGGAL</td>
                    <td>PDP</td>
                    <td>ODP</td>
                    <td>EDIT</td>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data->result_array() as $i) :
                    $barang_i1 = $i['id'];
                    $barang_i2 = $i['desa'];
                    $barang_i3 = $i['sembuh'];
                    $barang_i4 = $i['positif'];
                    $barang_i5 = $i['meninggal'];
                    $barang_i6 = $i['pdp'];
                    $barang_i7 = $i['odp'];

                ?>
                    <tr>
                        <td><?php echo $barang_i1; ?></td>
                        <td><?php echo $barang_i2; ?></td>
                        <td><?php echo $barang_i3; ?></td>
                        <td><?php echo $barang_i4; ?></td>
                        <td><?php echo $barang_i5; ?></td>
                        <td><?php echo $barang_i6; ?></td>
                        <td><?php echo $barang_i7; ?></td>
                        <td>
                            <a class="btn btn-block btn-outline-primary btn-xs" data-toggle="modal" data-target="#modal_edit<?php echo $barang_i1; ?>"> Edit</a>
                            <a class="btn btn-block btn-outline-primary btn-xs" data-toggle="modal" data-target="#modal_delete">Hapus</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <!-- ============ MODAL ADD BARANG =============== -->
    <div class="modal fade" id="modal_add_new" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Tambah Data <small style="font-size: 10px">JAGA PACIRAN</small></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'Edit_Data/Simpan_Data' ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">ID DESA</label>
                            <div class="col-xs-8">
                                <input name="id" id="id" class="form-control" type="text" placeholder="Masukkan ID Desa Disini..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">NAMA DESA</label>
                            <div class="col-xs-8">
                                <input name="desa" id="desa" class="form-control" type="text" placeholder="Masukkan Nama Desa Disini..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">ODP</label>
                            <div class="col-xs-8">
                                <input name="odp" id="odp" class="form-control" type="text" placeholder="Masukkan Jumlah ODP Disini..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-1">PDP</label>
                            <div class="col-xs-8">
                                <input name="pdp" id="pdp" class="form-control" type="text" placeholder="Masukkan Jumlah PDP Disini..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">SEMBUH</label>
                            <div class="col-xs-8">
                                <input name="sembuh" id="sembuh" class="form-control" type="text" placeholder="Masukkan Jumlah Sembuh Disini..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">POSITIF</label>
                            <div class="col-xs-8">
                                <input name="positif" id="positif" class="form-control" type="text" placeholder="Masukkan Jumlah Positif Disini..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">MENINGGAL</label>
                            <div class="col-xs-8">
                                <input name="meninggal" id="meninggal" class="form-control" type="text" placeholder="Masukkan Jumlah Meninggal Disini..." required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-block btn-outline-danger btn-xs" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-block btn-outline-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL ADD BARANG-->



    <!-- ============ MODAL EDIT BARANG =============== -->
    <div class="card-body">
        <?php
        foreach ($data->result_array() as $i) :
            $barang_i1 = $i['id'];
            $barang_i2 = $i['desa'];
            $barang_i3 = $i['sembuh'];
            $barang_i4 = $i['positif'];
            $barang_i5 = $i['meninggal'];
            $barang_i6 = $i['pdp'];
            $barang_i7 = $i['odp'];
        ?>
            <div class="modal fade" tabindex="2" id="modal_edit<?php echo $barang_i1; ?>" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">Edit Data <small style="font-size: 10px">JAGA PACIRAN</small></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'Edit_Data/Edit_Data' ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">ID DESA</label>
                                    <div class="col-xs-8">
                                        <input name="id" id="id" class="form-control" type="text" placeholder="Masukkan ID Desa Disini..." value="<?php echo $barang_i1; ?>" disabled required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">NAMA DESA</label>
                                    <div class="col-xs-8">
                                        <input name="desa" id="desa" class="form-control" type="text" placeholder="Masukkan Nama Desa Disini..." value="<?php echo $barang_i2; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">ODP</label>
                                    <div class="col-xs-8">
                                        <input name="odp" id="odp" class="form-control" type="text" placeholder="Masukkan Jumlah ODP Disini..." value="<?php echo $barang_i3; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-1">PDP</label>
                                    <div class="col-xs-8">
                                        <input name="pdp" id="pdp" class="form-control" type="text" placeholder="Masukkan Jumlah PDP Disini..." value="<?php echo $barang_i4; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">SEMBUH</label>
                                    <div class="col-xs-8">
                                        <input name="sembuh" id="sembuh" class="form-control" type="text" placeholder="Masukkan Jumlah Sembuh Disini..." value="<?php echo $barang_i5; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">POSITIF</label>
                                    <div class="col-xs-8">
                                        <input name="positif" id="positif" class="form-control" type="text" placeholder="Masukkan Jumlah Positif Disini..." value="<?php echo $barang_i6; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">MENINGGAL</label>
                                    <div class="col-xs-8">
                                        <input name="meninggal" id="meninggal" class="form-control" type="text" placeholder="Masukkan Jumlah Meninggal Disini..." value="<?php echo $barang_i7; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-block btn-outline-danger btn-xs" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-block btn-outline-success btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
    <!--END MODAL ADD BARANG-->

    <!-- ============ MODAL HAPUS =============== -->
    <div class="modal fade bs-example-modal-lg show" tabindex="3" id="modal_delete" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Tambah Data <small style="font-size: 10px">JAGA PACIRAN</small></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'Edit_Data/delete' ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">ID DESA</label>
                            <div class="col-xs-8">
                                <input name="id" id="id" class="form-control" type="text" placeholder="Masukkan ID Desa Disini..."  required>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button class="btn btn-block btn-outline-danger btn-xs" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-block btn-outline-success btn-sm">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>


    <!--END MODAL ADD BARANG-->

    <script src="<?php echo base_url() . 'assets/js/jquery-2.2.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
    <script>
        $(document).ready(function() {
            $('#mydata').DataTable();
        });
    </script>
</body>

</html>