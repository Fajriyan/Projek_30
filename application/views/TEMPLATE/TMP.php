<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Jaga Paciran</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/') ?>dist/css/adminlte.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/') ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">


    <!-- Jquery-UI -->
    <link href="<?php echo base_url('vendor/template/jquery-ui-1.10.0.custom.css'); ?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('vendor/template/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/template/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/template/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/template/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/template/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- html5 -->
    <script src="<?= base_url('vendor/jshtml5/jschart[html5].js'); ?>"></script>


    <!-- jQuery -->
    <script src="<?php echo base_url('vendor/template/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/jquery/dist/jquery-ui-1.10.0.custom.min.js'); ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url('vendor/template/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/template/datatables.net-scroller/js/dataTables.scroller.min.js'); ?>"></script>

</head>

<body class="layout-top-nav" style="height: auto;">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a class="navbar-brand">
                    <!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight-bold">JAGA PACIRAN</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <?php
                        if ($this->session->userdata('level') == '') {
                        ?>
                            <li class="nav-item">
                                <a href="<?= base_url('Welcome'); ?>" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Contact'); ?>" class="nav-link">Hubungi Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Login') ?>" class="nav-link">Login</a>
                            </li>
                        <?php }
                        if ($this->session->userdata('level') == '1') {
                        ?>
                            <li class="nav-item">
                                <a href="<?= base_url('Welcome'); ?>" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Contact'); ?>" class="nav-link">Hubungi Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Login/Logout') ?>" class="nav-link">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Edit_Data') ?>" class="nav-link">Isi Data</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <?php echo $isi; ?>
        <!-- /.content-utama -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright © 2020 <a href="<?= base_url(''); ?>">JAGA PACIRAN</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- ChartJS -->
    <script src="<?= base_url('vendor/tmp/') ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('vendor/tmp/') ?>plugins/sparklines/sparkline.js"></script>
    <!-- jQuery -->
    <script src="<?= base_url('vendor/tmp/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('vendor/tmp/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('vendor/tmp/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('vendor/tmp/') ?>dist/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('vendor/tmp/') ?>plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('vendor/tmp/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('vendor/tmp/') ?>dist/js/demo.js"></script>


    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>

</body>

</html>