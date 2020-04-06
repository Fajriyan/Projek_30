<div class="content-wrapper">
    <!-- Content Utama -->
    <div class="content-header">
        <div class="container">
            <h1 class="text-center font-weight-light" style="margin-bottom: 10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 50px;">JAGA PACIRAN</h1>
            <h5 class="text-center font-weight-light" style="margin-bottom: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">Login Menuju Sistem </h5>

            <!-- ------------------------------------------- -->

            <!-- ------------------------------------------- -->
            <?php echo form_open('Login/login_app'); ?>
            <div class="row row-cards">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                    <?php
                    if ($this->session->userdata('level') == '') {
                    ?> <center>
                            <input type="text" class="form-control" style="width: 30%;" id="username" name="username" value="<?= set_value(('username')) ?>" placeholder="Masukkan Username"><br>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                            <hr style="width: 30%; margin-top: 5px; margin-bottom: 5px;">
                            <input type="password" class="form-control" style="width: 30%;" id=" password" name="password" placeholder="Masukkan Password"><br>
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                            <hr style="width: 30%">
                            <input type="submit" class="form-control" style="width: 30%;" value="Masuk">
                        </center>
                    <?php } else if ($this->session->userdata('level') == '1') { ?>

                        <?= 'logout' ?>
                    <?php } ?>
                </div>
            </div>
            <?php echo form_close() ?>
            <!-- ------------------------------------------- -->

        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->