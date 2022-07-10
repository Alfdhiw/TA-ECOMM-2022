<?php
$id               = $invoice->no_nota;

if ($this->input->post('is_submitted')) {
    $date             = set_value('date');
    $due_date         = set_value('due_date');
    $status           = set_value('status');
} else {
    $date             = $invoice->tgl_jual;
    $due_date         = $invoice->due_date;
    $status           = $invoice->status;
}
?>

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
        <div class="col-10 m-auto pt-2">
            <h1>Konfirmasi Pembayaran</h1>
            <div><?= validation_errors() ?></div>
            <?= form_open_multipart('order/update_bayar/' . $id, ['class' => 'form-horizontal']) ?>

            <div class="form-group">
                <label class="col-sm-2  control-label">Invoice Id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" disabled>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2   control-label"> Date</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="date" value="<?php echo $date; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2  control-label">Due Date</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="due_date" value="<?php echo $due_date; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2  control-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" value="<?php echo $status; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2  control-label">Payment Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="userfile">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default"> Save </button>
                </div>
            </div>

            <?= form_close() ?>
        </div>
        <div class="col-md-1"></div>
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