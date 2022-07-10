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



                    <!-- Card  -->

                    <div class="card mb-3">

                        <div class="card-header">

                            <a href="<?php echo site_url('admin/konsumen/') ?>"><i class="fas fa-arrow-left"></i>

                                Kembali

                            </a>

                        </div>

                        <div class="card-body">



                            <form action="" method="post" enctype="multipart/form-data" class="mt-5">



                                <input type="hidden" name="id" value="<?php echo $konsumen->kd_konsumen ?>" />


                                <div class="form-group">

                                    <label for="image">Foto</label>

                                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />

                                    <input type="hidden" name="gambar_lama" value="<?= $konsumen->foto ?>" />

                                    <div class="invalid-feedback">

                                        <?php echo form_error('image') ?>

                                    </div>

                                </div>



                                <div class="form-group form-row">

                                    <div class="col">

                                        <label for="username">Username</label>

                                        <input id="username" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" value="<?= $konsumen->username ?>" />

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

                                    <input id="nm_konsumen" class="form-control <?php echo form_error('nm_konsumen') ? 'is-invalid' : '' ?>" type="text" name="nm_konsumen" value="<?= $konsumen->nm_konsumen ?>" />

                                    <div class="invalid-feedback">

                                        <?php echo form_error('nm_konsumen') ?>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label for="email">Email</label>

                                    <input id="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="email" name="email" value="<?= $konsumen->email ?>" />

                                    <div class="invalid-feedback">

                                        <?php echo form_error('email') ?>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label for="no_hp">Nomer Telp/HP.</label>

                                    <input id="no_hp" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="text" name="no_hp" value="<?= $konsumen->no_hp ?>" />

                                    <div class="invalid-feedback">

                                        <?php echo form_error('no_hp') ?>

                                    </div>

                                </div>



                                <div class="form-group form-row">

                                    <div class="col">

                                        <label for="kodepos">Kode POS</label>

                                        <input id="kodepos" class="form-control <?php echo form_error('kodepos') ? 'is-invalid' : '' ?>" type="text" name="kodepos" value="<?= $konsumen->kodepos ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('kodepos') ?>

                                        </div>

                                    </div>

                                    <div class="col">

                                        <label for="kota">Kota</label>

                                        <input id="kota" class="form-control <?php echo form_error('kota') ? 'is-invalid' : '' ?>" type="text" name="kota" value="<?= $konsumen->kota ?>" />

                                        <div class="invalid-feedback">

                                            <?php echo form_error('Kota') ?>

                                        </div>

                                    </div>

                                </div>




                                <div class="form-group">

                                    <label for="alamat">Alamat</label>

                                    <textarea id="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="number" name="alamat" placeholder="alamat Produk" rows="3"><?= $konsumen->alamat ?></textarea>

                                    <div class="invalid-feedback">

                                        <?php echo form_error('alamat') ?>

                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="group">Group</label>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <select class="custom-select mr-sm-2" id="group" class="form-control <?php echo form_error('group') ? 'is-invalid' : '' ?>" name="group">
                                                <option selected>Select...</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Update Biodata" id="submit" />
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