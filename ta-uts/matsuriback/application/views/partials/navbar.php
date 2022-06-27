<nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow " id="nav">

  <a class="navbar-nama mr-auto" href="<?php echo base_url() ?>">
    <h2 class="font-weight-bolder text-white">MATSURI CASTLE</h2>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse " id="navbarNav">

    <ul class="navbar-nav ml-auto ">

      <!-- <li class="nav-item">

        <a class="nav-link text-success" href="<?php //echo base_url() 
                                                ?>">Home</a>

      </li> -->

      <?php if ($this->session->userdata('username')) { ?>
        <li class="nav-item">
          <div class="nav-link">
            <?= anchor('profil', '<i class="fas fa-user mr-1"></i>' . $this->session->userdata('username'), array('class' => 'btn text-success px-0 py-1')) ?>
          </div>
        </li>
        <li class="nav-item">
          <div class="nav-link"><?php echo anchor('order/my_order', 'My Orders', array('class' => 'btn text-success ')); ?></div>
        </li>
        <li class="nav-item">
          <div class="nav-link"><?php echo anchor('admin/produk', 'Channel', array('class' => 'btn btn-outline-success ')); ?></div>
        </li>
        <li class="nav-item">
          <div class="nav-link"><?php echo anchor('login/logout', 'Logout', array('class' => 'btn btn-outline-success ')); ?></div>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <div class="nav-link"><?php echo anchor('login', '<b>Masuk</b>', array('class' => 'btn btn-sm border-light text-light px-3')); ?></div>
        </li>
        <li class="nav-item">
          <div class="nav-link"><?php echo anchor('register', '<b>Daftar</b>', array('class' => 'btn btn-sm bg-danger px-3 text-light')); ?></div>
        </li>
      <?php } ?>
    </ul>
    </ul>
  </div>
</nav>