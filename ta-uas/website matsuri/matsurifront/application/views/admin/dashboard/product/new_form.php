<!DOCTYPE html>

<html lang="en">

<head>

    <?php $this->load->view("admin/dashboard/_partials/head.php") ?>

</head>

<body class="sb-nav-fixed">

    <?php $this->load->view("admin/dashboard/_partials/navbar.php") ?>

    <div id="layoutSidenav">

        <?php $this->load->view("admin/dashboard/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid">

                    <?php $this->load->view("admin/dashboard/_partials/breadcrumb.php") ?>

                    <!-- Content -->

                    <?php if ($this->session->flashdata('success')) : ?>

                        <div class="alert alert-success" role="alert">

                            <?php echo $this->session->flashdata('success'); ?>

                        </div>

                    <?php endif; ?>



                    <div class="card mb-3">

                        <div class="card-header">

                            <a href="<?php echo site_url('admin/produk/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>

                        </div>

                        <div class="card-body">



                            <form action="<?php echo site_url('admin/produk/tambah') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">

                                    <label for="image">Gambar</label>

                                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />

                                    <div class="invalid-feedback">

                                        <?php echo form_error('image') ?>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label for="nama">Nama</label>

                                    <input id="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Produk" value="<?php echo set_value('nama'); ?>" />

                                    <div class="invalid-feedback">

                                        <?php echo form_error('nama') ?>

                                    </div>

                                </div>



                                <div class="form-group form-row">

                                    <div class="col">

                                        <label for="hargabeli">Harga Beli</label>

                                        <input id="hargabeli" class="form-control <?php echo form_error('hargabeli') ? 'is-invalid' : '' ?>" type="number" min="1" name="hargabeli" value="<?php echo set_value('hargabeli'); ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('hargabeli') ?>

                                        </div>

                                    </div>

                                    <div class="col">

                                        <label for="harga">Harga Jual</label>

                                        <input id="harga" class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="number" min="1" name="harga" value="<?php echo set_value('harga'); ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('harga') ?>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group form-row">

                                    <div class="col">

                                        <label for="satuan">Satuan</label>

                                        <input id="satuan" class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" value="<?php echo set_value('satuan'); ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('satuan') ?>

                                        </div>

                                    </div>

                                    <div class="col">

                                        <label for="stok">Stok Produk</label>

                                        <input id="stok" class="form-control <?php echo form_error('stok') ? 'is-invalid' : '' ?>" type="number" min="1" name="stok" value="<?php echo set_value('stok'); ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('stok') ?>

                                        </div>

                                    </div>

                                    <div class="col">

                                        <label for="stokmin">Stok Minimal</label>

                                        <input id="stokmin" class="form-control <?php echo form_error('stokmin') ? 'is-invalid' : '' ?>" type="number" min="0" name="stokmin" value="<?php echo set_value('stokmin'); ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('stokmin') ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="deskripsi">Deskripsi</label>

                                    <textarea id="deskripsi" class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" type="text" name="deskripsi" placeholder="Deskripsi Produk" rows="3"><?php echo set_value('deskripsi'); ?></textarea>

                                    <div class="invalid-feedback">

                                        <?php echo form_error('deskripsi') ?>

                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Save" />

                            </form>



                        </div>

                        <!-- end ofContent -->

                    </div>

            </main>

            <?php $this->load->view("admin/dashboard/_partials/footer.php") ?>

        </div>

    </div>

    <?php $this->load->view("admin/dashboard/_partials/js.php") ?>



</body>

</html>