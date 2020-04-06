<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if ($this->session->userdata('level') == '1') {
    ?>
        selamat login berhasil (ADMIN)
        <a href="<?php echo base_url('/index.php/login/logout') ?>">logout</a>
    <?php } ?>

    <?php
    if ($this->session->userdata('level') == '2') {
    ?>
        selamat login berhasil (USER)
        <a href="<?php echo base_url('/index.php/login/logout') ?>">logout</a>
    <?php } ?>
</body>

</html>