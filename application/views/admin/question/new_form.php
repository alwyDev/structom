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
                                    <label for="no">No*</label>
                                    <input class="form-control <?php echo form_error('no') ? 'is-invalid' : '' ?>" type="text" name="no" placeholder="No" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="question">Question*</label>
                                    <input class="form-control <?php echo form_error('question') ? 'is-invalid' : '' ?>" type="text" name="question" placeholder="Question" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('question') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_1">Choice 1*</label>
                                    <input class="form-control <?php echo form_error('choice_1') ? 'is-invalid' : '' ?>" type="text" name="choice_1" min="0" placeholder="Choice 1" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_1') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_2">Choice 2*</label>
                                    <input class="form-control <?php echo form_error('choice_2') ? 'is-invalid' : '' ?>" type="text" name="choice_2" min="0" placeholder="Choice 2" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_2') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_3">Choice 3*</label>
                                    <input class="form-control <?php echo form_error('choice_3') ? 'is-invalid' : '' ?>" type="text" name="choice_3" min="0" placeholder="Choice 3" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_3') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_4">Choice 4*</label>
                                    <input class="form-control <?php echo form_error('choice_4') ? 'is-invalid' : '' ?>" type="text" name="choice_4" min="0" placeholder="Choice 4" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_4') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_5">Choice 5*</label>
                                    <input class="form-control <?php echo form_error('choice_5') ? 'is-invalid' : '' ?>" type="text" name="choice_5" min="0" placeholder="Choice 5" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_5') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="answer">Answer*</label>
                                    <input class="form-control <?php echo form_error('answer') ? 'is-invalid' : '' ?>" type="text" name="answer" min="0" placeholder="Answer" />
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