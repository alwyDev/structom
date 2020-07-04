<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed" id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?php $this->load->view("admin/_partials/sidebar.php") ?>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Edit Score</h1>
                    <!-- <?php $this->load->view("admin/_partials/breadcrumb.php") ?> -->

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Card  -->
                    <div class="card mb-3">
                        <div class="card-header">

                            <a href="<?php echo site_url('admin/scores/') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                oleh controller tempat view ini digunakan. Yakni admin/scores/edit/ID --->

                                <input type="hidden" name="id" value="<?php echo $score->student_id ?>" />

                                <div class="form-group">
                                    <label for="nis">NIS*</label>
                                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid' : '' ?>" type="text" name="name" placeholder="name" value="<?php echo $score->name ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nis') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" type="text" name="name" placeholder="name" value="<?php echo $score->name ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('name') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="score">Score</label>
                                    <input class="form-control <?php echo form_error('score') ? 'is-invalid' : '' ?>" type="text" name="score" min="0" placeholder="score" value="<?php echo $score->score ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('score') ?>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Save" />
                            </form>
                        </div>
                        <div class="card-footer small text-muted">
                            * required fields
                        </div>
                    </div>
                    <!-- /.container-fluid -->
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>