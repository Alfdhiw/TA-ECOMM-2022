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
    <?php $this->load->view("user/_partials/breadcrumb.php") ?>
    <div style="min-height: 60vh">
        <div class="col-10 m-auto pt-5">
            <table>
                <tr>
                    <td>Status Pembayaran</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td><?= $invoice->status ?></td>
                </tr>
                <tr>
                    <td>Tujuan Pengiriman</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td><?= $invoice->tujuan ?></td>
                </tr>
                <tr>
                    <td>Expedisi</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td><?= $invoice->expedisi ?></td>
                </tr>
                <tr>
                    <td>Waktu Pengiriman</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td><?= $invoice->wkt_pengiriman ?></td>
                </tr>

            </table>

            <div class="table-responsive mt-5 ">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah beli</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($orders as $order) :
                            $subtotal = $order->jml_brg * $order->harga;
                        ?>
                            <tr>
                                <td><?= $order->nm_barang ?></td>
                                <td><?= "Rp. " . number_format($order->harga) ?></td>
                                <td><?= $order->jml_brg ?></td>
                                <td><?= "Rp. " . number_format($subtotal) ?></td>
                            </tr>
                        <?php
                            $total += $subtotal;
                        endforeach;
                        ?>
                    </tbody>
                    <tfoot></tfoot>
                </table>

                <div class="d-flex justify-content-end font-weight-bold">
                    <table class="mt-2 mb-5">
                        <tr>
                            <td>Total Pembelian</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td><?= "Rp. " . number_format($total) ?></td>
                        </tr>
                        <tr>
                            <td>Ongkos Pengiriman</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td><?= "Rp. " . number_format($invoice->ongkir) ?></td>
                        </tr>
                        <tr>
                            <td>Total Biaya</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td><?= "Rp. " . number_format($invoice->total_biaya) ?></td>
                        </tr>
                    </table>
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

    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>



    <!--<script src="<?php echo base_url() ?>assets/js/fontawesome.all.min.js" ></script>-->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "dom": ''
            });
        });
    </script>
</body>

</html>