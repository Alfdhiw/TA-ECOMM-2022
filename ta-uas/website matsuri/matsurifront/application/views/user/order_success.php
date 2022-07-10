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

    <div class="container" style="min-height:60vh">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Transaksi Berhasil</h5>
                        <button type="button" class="close" onclick="location.href='<?= base_url() ?>'">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-4">
                        Terimakasih, Transaksi berhasil diproses <br>
                        Silahkan lakukan konfirmasi pembayaran pada menu <strong>My Orders</strong>,
                        atau melalui tombol dibawah

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" onclick="location.href='<?= base_url() ?>'">Kembali ke beranda</button>
                        <button type="button" class="btn btn-success " onclick="location.href='<?= site_url('order/my_order') ?>'">Konfirmasi Pembayaran</button>
                    </div>
                </div>
            </div>
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

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#exampleModalCenter').modal('show');
        });
    </script>

</body>

</html>