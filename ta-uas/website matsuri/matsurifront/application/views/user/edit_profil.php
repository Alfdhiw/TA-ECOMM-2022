<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matsuri Castle - Sushi Restaurant</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/cart.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles-user.css" />


    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Image and text -->
    <!-- <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/'); ?>img/logo/matsuricastle.png" width="30" height="30" alt="">
        </a>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url(); ?>home">
            <img src="<?= base_url('assets/'); ?>img/logo/matsuricastle.png" width="30" height="30" alt="">
        </a>
    </nav>

    <section id="section1" class="topOff">
        <div class="container">

            <div class="col-lg-8 col-md-8 col-12 m-auto">

                <div class="col-12 d-flex justify-content-between">

                    <h2>Profile</h2>

                    <div><button id="btn-edit" type="button" class="btn btn-sm btn-warning my-2"><i class="fas fa-edit mr-1"></i>Edit</button></div>

                </div>

                <?php if ($this->session->flashdata('success')) : ?>

                    <div class="alert alert-success" role="alert">

                        <?php echo $this->session->flashdata('success'); ?>

                    </div>

                <?php endif; ?>

                <?php if ($this->session->flashdata('error')) : ?>

                    <div class="alert alert-danger" role="alert">

                        <?php echo $this->session->flashdata('error'); ?>

                    </div>

                <?php endif; ?>

                <form action="" method="post" enctype="multipart/form-data" class="mt-5">



                    <input type="hidden" name="id" value="<?php echo $konsumenDetail->kd_konsumen ?>" />



                    <div class="form-group form-row mb-4">

                        <div class="col-4">

                            <div class="img-container border border-2 rounded-circle">

                                <img class="rounded-circle" src="<?php echo base_url('assets/img/profil/' . $konsumenDetail->foto) ?>" alt="">

                            </div>

                        </div>

                        <div class="col d-flex align-items-center">

                            <input class="form-control-file" type="file" name="image" />

                            <input type="hidden" name="gambar_lama" value="<?= $konsumenDetail->foto ?>" />

                        </div>

                    </div>



                    <div class="form-group form-row">

                        <div class="col">

                            <label for="username">Nama Pengguna</label>

                            <input id="username" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" value="<?= $konsumenDetail->username ?>" />

                            <div class="invalid-feedback">

                                <?php echo form_error('username') ?>

                            </div>

                        </div>

                        <div class="col">

                            <label for="password">Kata Sandi</label>

                            <input id="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" />

                            <div class="invalid-feedback">

                                <?php echo form_error('password') ?>

                            </div>

                        </div>

                    </div>



                    <div class="form-group">

                        <label for="nm_konsumen">Nama Lengkap</label>

                        <input id="nm_konsumen" class="form-control <?php echo form_error('nm_konsumen') ? 'is-invalid' : '' ?>" type="text" name="nm_konsumen" value="<?= $konsumenDetail->nm_konsumen ?>" />

                        <div class="invalid-feedback">

                            <?php echo form_error('nm_konsumen') ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label for="email">Email</label>

                        <input id="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="email" name="email" value="<?= $konsumenDetail->email ?>" />

                        <div class="invalid-feedback">

                            <?php echo form_error('email') ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label for="no_hp">Nomer Telp/HP.</label>

                        <input id="no_hp" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="text" name="no_hp" value="<?= $konsumenDetail->no_hp ?>" />

                        <div class="invalid-feedback">

                            <?php echo form_error('no_hp') ?>

                        </div>

                    </div>



                    <div class="form-group form-row">

                        <div class="col">

                            <label for="kodepos">Kode POS</label>

                            <input id="kodepos" class="form-control <?php echo form_error('kodepos') ? 'is-invalid' : '' ?>" type="text" name="kodepos" value="<?= $konsumenDetail->kodepos ?>" />

                            <div class="invalid-feedback">

                                <?php echo form_error('kodepos') ?>

                            </div>

                        </div>

                        <div class="col">

                            <label for="kota">Kota</label>

                            <input id="kota" class="form-control <?php echo form_error('kota') ? 'is-invalid' : '' ?>" type="text" name="kota" value="<?= $konsumenDetail->kota ?>" />

                            <div class="invalid-feedback">

                                <?php echo form_error('Kota') ?>

                            </div>

                        </div>

                    </div>



                    <div class="form-group">

                        <label for="alamat">Alamat</label>

                        <textarea id="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="number" name="alamat" placeholder="alamat Produk" rows="3"><?= $konsumenDetail->alamat ?></textarea>

                        <div class="invalid-feedback">

                            <?php echo form_error('harga') ?>

                        </div>

                    </div>



                    <input class="btn btn-success" type="submit" name="btn" value="Update Biodata" id="submit" />

                </form>

            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Matsuri Castle © 2022. All Right Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.formatCurrency-1.4.0.pack.js"></script>

    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>



    <!--<script src="<?php echo base_url() ?>assets/js/fontawesome.all.min.js" ></script>-->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <script>
        $(document).ready(function() {

            disablededit();



            $("#btn-edit").click(function() {

                enablededit();

            });



            function disablededit() {

                $('input').attr('readonly', true);

                $('textarea').attr('readonly', true);

                $('#submit').attr('disabled', true);

            }

            function enablededit() {

                $('input').removeAttr('readonly', true);

                $('textarea').removeAttr('readonly', true);

                $('#submit').removeAttr('disabled', true);

            }

        });
    </script>

</body>

</html>