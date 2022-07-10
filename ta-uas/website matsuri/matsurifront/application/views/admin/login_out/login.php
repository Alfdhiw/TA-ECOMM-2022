<!-- Header start -->
<br>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-custom">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>home">
            <img src="<?= base_url('assets/'); ?>img/logo/panah.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
    </div>
</nav>
<!-- Header End -->
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">


        <div class="col-xl-10 col-lg-12 col-md-9">
            <br>
            <br>

            <div class="card-body p-5">
                <?php if ($this->session->flashdata('error')) : ?>

                    <div class="alert alert-danger" role="alert">

                        <?php echo $this->session->flashdata('error'); ?>

                    </div>

                <?php endif; ?>
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-custom"></div>
                    <div class="col-lg-6">
                        <div class="p-7">
                            <div class="text-center">
                                <h1 class="h2 text-white mb-4"><b>Welcome Back!</b></h1>
                            </div>
                            <?= form_open('login', ['class' => 'user']) ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?php echo form_error('username') ? 'is-invalid' : '' ?>" name="username" aria-describedby="emailHelp" placeholder="Enter Username..." value="<?php echo set_value('username'); ?>">
                                <div class="invalid-feedback">

                                    <span><?php echo form_error('username') ?></span>

                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user <?php echo form_error('password') ? 'is-invalid' : '' ?>" name="password" placeholder="Password">
                                <div class="invalid-feedback">

                                    <?php echo form_error('password') ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-user btn-block">
                                Login
                            </button>
                            <hr>
                            </form>

                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('register'); ?>">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>