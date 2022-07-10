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
        <div class="col-10 m-auto">
            <div class="table-responsive mt-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No nota</th>
                            <th>Tanggal Transaksi</th>
                            <th>Dikirim ke</th>
                            <th>Total Biaya</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Detail Pembelian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoices as $invoice) : ?>
                            <tr>
                                <td><?= $invoice->no_nota ?></td>
                                <td><?= $invoice->tgl_jual ?></td>
                                <td><?= $invoice->tujuan ?></td>
                                <td class="text-right">Rp. <?= number_format($invoice->total_biaya) ?></td>
                                <td>
                                    <?php if (isset($invoice->image)) { ?>
                                        <img src="<?= base_url('assets/img/struk/') . $invoice->image ?>" height="50px">
                                    <?php
                                    } else {
                                        echo "Anda belum upload<br> bukti pembayaran";
                                        echo "<br><small class='text-danger'>bayar sebelum " . date("j F", strtotime($invoice->due_date)) . "</small>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $invoice->status ?>
                                    <?php
                                    if ($invoice->status == "Belum dibayar") {
                                        echo anchor('order/update_bayar/' . $invoice->no_nota, 'Bayar', ['class' => 'btn btn-danger btn-sm btn-pay']);
                                    } else if ($invoice->status == "Sudah dibayar") {
                                        echo anchor('order/printNota/' . $invoice->no_nota, 'Cetak Nota', ['class' => 'btn btn-success btn-sm ']);
                                    }
                                    ?>

                                </td>
                                <td><?= anchor('order/my_order_detail/' . $invoice->no_nota, 'Lihat Detail', ['class' => 'btn btn-info btn-sm']) ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>