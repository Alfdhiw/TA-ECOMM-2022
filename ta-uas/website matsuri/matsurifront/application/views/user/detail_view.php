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
    <div class="container my-5" style="min-height: 80vh">


        <div class="row mb-3">

            <div class="col-md-5">

                <div class="img-container  border">

                    <img src="<?= base_url() . 'assets/img/upload/' . $productsDetail->gambar; ?>" alt="">

                </div>

            </div>

            <div class="col-md-7 pl-5">

                <h1><b><?= $productsDetail->nm_barang; ?></b></h1>

                <hr>

                <div class="row">

                    <div class="col-3 text-muted">
                        <h4>Harga</h4>
                    </div>

                    <div class="col-9">
                        <h3><?= 'Rp. ' . number_format($productsDetail->harga) ?></h3>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-3 text-muted">
                        <h4>Jumlah Barang</h4>
                    </div>

                    <div class="col-9">

                        <?php

                        $stok = ($productsDetail->stok) - ($productsDetail->stok_min);

                        ?>

                        <small>Stok tersisa : <?php if ($stok >= 0) {
                                                    echo $stok;
                                                } else {
                                                    echo "0";
                                                }
                                                echo " " . $productsDetail->satuan; ?></small><br><br>

                        <form action="<?php echo site_url('home/add_to_cart/' . $productsDetail->kd_barang) ?>" method="post">

                            <span class="m-2">

                                <button class="btn btn-minus btn-counter text-center custom-button" type="button"><i class="fas fa-minus"></i></button>

                                <input type="text" name="qty" class="col-2 btn border px-2 count" value="1" onkeypress="return onlyNumberKey(event)">

                                <button class="btn btn-plus btn-counter text-center custom-button" type="button"><i class="fas fa fa-plus"></i></button>

                            </span><br><br>
                            <span class="m-2">
                                <button id="addtocart" type="submit" class="btn btn-beli m-2"><i class="fas fa fa-plus"></i>&nbsp;Add to Cart</button>
                            </span>

                            <?php if ($this->session->flashdata('success')) : ?>

                                <div class="alert alert-success" role="alert">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                            <?php endif; ?>

                        </form>

                    </div>

                </div>

                <hr>

                <div class="row" id="smoth-up">

                    <div class="col-3 text-muted">
                        <h4>Deskripsi</h4>
                    </div>

                    <div class="col-9">
                        <h4>

                            <?= $productsDetail->deskripsi ?>

                        </h4>
                    </div>

                </div>

            </div>

        </div>

        <div class="mt-5 mb-2 border-bottom border-5 border-success mb-0">
            <h3><b>Barang yang mungkin anda suka</b></h3>
        </div>
        <div class="row">
            <div class="col-8">
                <hr class="btn-beli mt-0">
            </div>
            <div class="col-4"></div>
        </div>
        <!-- Tampilkan semua produk -->

        <div class="row p-0">

            <!-- looping products -->

            <?php foreach ($products as $row) : ?>

                <div class="col-lg-2 col-md-3 col-6 my-2 px-2 ">

                    <btn class="card card-block card_produk shadow-sm d-flex h-100" onclick="window.location.href='<?= site_url('home/detail/' . $row->kd_barang) ?>'">

                        <img class="card-img-top" height="150px" src="<?php echo base_url() . 'assets/img/upload/' . $row->gambar; ?> " alt=" <?= $row->nm_barang; ?>">

                        <div class="card-body px-2  d-flex flex-column">

                            <h5 class="card-title mb-2"> <?= $row->nm_barang; ?> </h5>

                            <div class="card-text mt-auto">

                                <div class="text-description">

                                    <?= (strlen($row->deskripsi) > 50 ?

                                        substr($row->deskripsi, 0, 50) . "..." :

                                        $row->deskripsi);

                                    ?>

                                </div>

                                <div class="text-right mt-2 harga">

                                    <kbd><?= 'Rp. ' . number_format($row->harga); ?></kbd>

                                </div>

                            </div>

                        </div>

                        <!-- <div class="card-footer bg-white border-top-0 p-2 pt-1">

                            <div class=""><? //=anchor('produk/add_to_cart/'.$row->produk_id, 'Add to cart' , ['class'=>'btn btn-success btn-block mt-auto','role'=>'button'])
                                            ?></div>

                        </div> -->

                    </btn>

                </div>

            <?php endforeach; ?>

            <!-- end looping -->

        </div>

    </div>

    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.formatCurrency-1.4.0.pack.js"></script>

    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>



    <!--<script src="<?php echo base_url() ?>assets/js/fontawesome.all.min.js" ></script>-->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <script>
        //fungsi counter button

        $(document).ready(function() {



            if (parseInt("<?= $stok ?>") < 1) {

                $('.count').val(0);

                $('addtocart').setEnabled(false);

            }



            $('.hargaX').text(parseInt($('.count').val()) * parseInt("<?= $productsDetail->harga ?>")).formatCurrency();

            $(document).on('click', '.btn-plus', function() {

                if (parseInt($('.count').val()) < parseInt("<?= $stok ?>")) {

                    $('.count').val(parseInt($('.count').val()) + 1);

                    $('.hargaX').text(parseInt($('.count').val()) * parseInt("<?= $productsDetail->harga ?>")).formatCurrency();

                }

            });

            $(document).on('click', '.btn-minus', function() {

                $('.count').val(parseInt($('.count').val()) - 1);

                if ($('.count').val() <= 0) {
                    $('.count').val(0);
                };

                $('.hargaX').text(parseInt($('.count').val()) * parseInt("<?= $productsDetail->harga ?>")).formatCurrency();



            });

        }); //fungsi counter button



        // fungsi input hanya menerima angka

        function onlyNumberKey(evt) {

            var ASCIICode = (evt.which) ? evt.which : evt.keyCode

            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;

            return true;

        } // fungsi input hanya menerima angka 



        setTimeout(function() {

            $('.alert').fadeOut('500');

        }, 1000);
    </script>

</body>

</html>