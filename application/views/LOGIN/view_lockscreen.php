<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN LOGIN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/'); ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('vendor/tmp/'); ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?= base_url('vendor/tmp/'); ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href=""><b>Sistem</b> Islamic Study Club</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Islamic Study Club</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?= base_url('vendor/img/logo.jpg'); ?>" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <?php echo form_open('index.php/Login/login_app'); ?>
            <form class="lockscreen-credentials">
                <div class="input-group">
                    <input style="margin-left: 70px; border: none;" type="password" id="password_admin" name="password_admin" class="form-control" placeholder="Password">
                    <!-- <button type="button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button> -->
                    <input type="submit" class="btn">


                </div>
            </form>
            <?php echo form_close() ?>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Masukkan Password Pada Kolom Diatas
        </div>
        <div class="text-center">
            <a href="<?= base_url('index.php/Login/Akun_Lain') ?>">Masuk Dengan Akun Lain</a>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2020 <b><a href="<?php echo base_url() ?>" class="text-black">Islamic Study Club</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="<?= base_url('vendor/tmp/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('vendor/tmp/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>