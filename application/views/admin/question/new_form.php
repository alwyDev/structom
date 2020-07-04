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
                    <h1 class="mt-4">Add Question</h1>
                    <!-- <?php $this->load->view("admin/_partials/breadcrumb.php") ?> -->

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/questions/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo site_url('admin/questions/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="question">Question*</label>
                                    <input class="form-control <?php echo form_error('question') ? 'is-invalid' : '' ?>" type="text" name="question" placeholder="question" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('question') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="answer">Answer*</label>
                                    <input class="form-control <?php echo form_error('answer') ? 'is-invalid' : '' ?>" type="text" name="answer" min="0" placeholder="question answer" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('answer') ?>
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
                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>