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

                    <?php $this->load->view("admin/dashboard/_partials/examplesbadmin.php") ?>

                </div>

            </main>

            <?php $this->load->view("admin/dashboard/_partials/footer.php") ?>

        </div>

    </div>

    <?php $this->load->view("admin/dashboard/_partials/js.php") ?>

</body>

</html>