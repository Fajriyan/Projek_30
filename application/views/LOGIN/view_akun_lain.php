<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN DISINI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/'); ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a><b>Sistem </b>Islamic Study Club</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign In Now</p>

                <?php echo form_open('index.php/Login/login_lain'); ?>
                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" id="username_user" name="username_user" class="form-control" placeholder="Username">
                        <?= form_error('username_user', '<small class="text-danger pl-3">', '</small>') ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password_user" name="password_user" class="form-control" placeholder="Password">
                        <?= form_error('password_user', '<small class="text-danger pl-3">', '</small>') ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-15">
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>
            <?php echo form_close() ?>

            <p class="ml-3 mb-1">
                <a href="#-085-736-409-753">Hubungi Pengembang</a>
            </p>
            <p class="ml-3 mb-3">
                <a href="<?php echo base_url('index.php/Login') ?>" class="text-center">Kembali Ke Login Admin</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('vendor/tmp/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('vendor/tmp/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('vendor/tmp/'); ?>dist/js/adminlte.min.js"></script>

</body>

</html>