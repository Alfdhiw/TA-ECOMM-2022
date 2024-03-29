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


    <style>
        input[type="radio"] {
            -webkit-appearance: none;
        }

        input[type="radio"]+label {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input[type="radio"]:checked+label {
            background-color: #ffffff;
            box-shadow: 0 5px 15px 5px rgb(0, 0, 0, 0.1);
        }
    </style>
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

    <div style="min-height: 80vh">

        <div class="row my-5 col-lg-8 mx-auto">

            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Gambar</th>

                            <th>Produk</th>

                            <th>Jumlah</th>

                            <th class="text-right">Harga</th>

                            <th class="text-right">Subtotal</th>

                            <th class="text-center">Aksi</th>

                        </tr>

                    </thead>

                    <tbody class="detail_cart"></tbody>

                </table>

            </div>

            <div class="card col-12 px-5 pt-5 pb-4">

                <div id="overlay">
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <div class="spinner"></div>
                    </div>
                </div>

                <form action="<?= site_url('order') ?>" method="post">
                    <div class="form-group">
                        <label for="alamat">Dikirim ke</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="province">Provinsi</label>
                            <select class="form-control form-control-sm autocomplete" id="province" name="province">
                                <option selected>-- Pilih Provinsi --</option>
                                <?php
                                $data = json_decode($province, true);
                                for ($i = 0; $i < count($data['rajaongkir']['results']); $i++) {
                                    echo "<option value='" . $data['rajaongkir']['results'][$i]['province_id'] . "'>" . $data['rajaongkir']['results'][$i]['province'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="kabKota">Kab/Kota</label>
                            <select class="form-control form-control-sm autocomplete" id="kabKota" name="kabKota">
                                <option selected>-- Pilih Kab/Kota --</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <div class="form-control border-0">

                            <div class="col-8 m-auto card-group pl-2 justify-content-center">
                                <input type="radio" name="kurir" value="pos" id="pos" checked>
                                <label for="pos" class="col-2 card mr-2">
                                    <img src="<?= base_url('assets/img/logo/pos.png') ?>" class="col-12 m-auto p-1">
                                </label>

                                <input type="radio" name="kurir" value="jne" id="jne">
                                <label for="jne" class="col-2 card mr-2 ">
                                    <img src="<?= base_url('assets/img/logo/jne.png') ?>" class="col-12 m-auto p-1">
                                </label>

                                <input type="radio" name="kurir" value="tiki" id="tiki">
                                <label for="tiki" class="col-2 card mr-2">
                                    <img src="<?= base_url('assets/img/logo/tiki.png') ?>" class="col-12 m-auto p-1">
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Biaya Pengiriman</label>
                        <div class="col-12 d-flex flex-column" id="biaya">

                        </div>
                    </div>


                    <div class="col-12 mt-4" id="totals">
                        <div class=" col-6 row ml-auto px-3 py-2 bg-light">
                            <div class="col-6 text-muted">Total Pesanan</div>
                            <div class="col-6 text-right text-muted" id="total2">Rp. 0</div>
                            <div class="col-6 text-muted">Biaya Pengiriman</div>
                            <div class="col-6 text-right text-muted" id="ongkir">Rp. 0</div>
                            <div class="col-6 font-weight-bold">Total Bayar</div>
                            <div class="col-6 text-right font-weight-bold" id="totalAll">Rp. 0</div>
                        </div>
                    </div>

                    <input type="hidden" name="fexpedisi" id="fexpedisi">
                    <input type="hidden" name="fetd" id="fetd">
                    <input type="hidden" name="fongkir" id="fongkir">

                    <div class="form-group text-center mt-3 mb-0">
                        <button type="submit" class="btn btn-success btn-checkout">Checkout</button>
                    </div>

                </form>

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

    <script>
        $('.cart-nav').remove();

        $(document).ready(function() {

            var ongkir;
            var total;

            //disable select kabupaten sebelum pilih provinsi
            $('#kabKota').attr('disabled', true);
            $('.btn-checkout').prop('disabled', true);

            // Load shopping cart
            $('.detail_cart').load("<?php echo base_url(); ?>home/load_cart", function() {
                $('#total2').html($('#total').html());
                $('#totalAll').html($('#total').html());
            });

            //Hapus Item Cart
            $(document).on('click', '.hapus_cart', function() {
                var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/home/hapus_cart",
                    headers: {
                        'Access-Control-Allow-Origin': '*'
                    },
                    method: "POST",
                    data: {
                        row_id: row_id
                    },
                    success: function(data) {
                        $('.detail_cart').html(data);
                        $('#total2').html($('#total').html());

                        $('#totalAll').html(parseInt(total) + parseInt(ongkir));
                        $('#totalAll').formatCurrency();
                    }
                });
            });

            //ketika provinsi dipilih
            $('#province').change(function() {
                loading_on();
                $('.btn-checkout').prop('disabled', true);;
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('home/load_kabKota'); ?>",
                    headers: {
                        'Access-Control-Allow-Origin': '*'
                    },
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    success: function(data) {
                        $('#kabKota').html(data); //mengisi option pada kab/kota
                        $('#biaya').html(""); //membuat div biaya kosong
                        $('#kabKota').attr('disabled', false);
                        loading_off();

                    }
                });
                return false;
            });

            //ketika kabupaten dipilih
            $('#kabKota').change(function() {
                loading_on();
                $('.btn-checkout').prop('disabled', true);
                $('input:radio[name=kurir]').filter('[value=pos]').prop('checked', true);
                var kab = $('#kabKota').val();
                var kurir = 'pos';

                load_ongkir(kab, kurir);
                return false;
            });

            //ketika kurir dipilih	
            $('input[name="kurir"]').change(function() {
                loading_on();
                $('.btn-checkout').prop('disabled', true);
                $('#ongkir').html('Rp. 0');
                $('#totalAll').html($('#total').html());

                $('#fexpedisi').val("");
                $('#fetd').val("");
                $('#fongkir').val("");

                var kab = $('#kabKota').val();
                var kurir = $(this).val();
                load_ongkir(kab, kurir);

                return false;
            });


            function load_ongkir(kab, kurir) {
                $.ajax({
                    url: "<?php echo site_url('home/load_ongkir'); ?>",
                    headers: {
                        'Access-Control-Allow-Origin': '*'
                    },
                    method: "POST",
                    data: {
                        kab: kab,
                        kurir: kurir
                    },
                    async: true,
                    success: function(data) {
                        if (kab > 0) {
                            $('#biaya').html(data);
                            loading_off();
                            //ketika ongkir dipilih	
                            $('input[name="ongkir"]').change(function() {
                                ongkir = $(this).val();
                                $('#ongkir').html(ongkir);
                                $('#ongkir').formatCurrency();

                                total = $('#total').html().replace('Rp. ', '').replace(',', '');
                                $('#totalAll').html(parseInt(total) + parseInt(ongkir));
                                $('#totalAll').formatCurrency();

                                $('#fexpedisi').val($('#sexpedisi').html());
                                $('#fetd').val($('#setd').html());
                                $('#fongkir').val(ongkir);

                                $('.btn-checkout').prop('disabled', false);
                            });
                        }
                    }
                });
            }

            function loading_on() {
                document.getElementById("overlay").style.display = "flex";
            }

            function loading_off() {
                document.getElementById("overlay").style.display = "none";
            }


        });
    </script>
</body>

</html>