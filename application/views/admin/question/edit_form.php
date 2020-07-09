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
                    <h1 class="mt-4">Edit Question</h1>
                    <!-- <?php $this->load->view("admin/_partials/breadcrumb.php") ?> -->

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Card  -->
                    <div class="card mb-3">
                        <div class="card-header">

                            <a href="<?php echo site_url('admin/questions/') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                oleh controller tempat view ini digunakan. Yakni admin/questions/edit/ID --->

                                <input type="hidden" name="id" value="<?php echo $question->quiz_id ?>" />

                                <div class="form-group">
                                    <label for="question">Question*</label>
                                    <input class="form-control <?php echo form_error('question') ? 'is-invalid' : '' ?>" type="text" name="question" placeholder="Qestion" value="<?php echo $question->question ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('question') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_1">Choice 1*</label>
                                    <input class="form-control <?php echo form_error('choice_1') ? 'is-invalid' : '' ?>" type="text" name="choice_1" min="0" placeholder="Choice 1" value="<?php echo $question->choice_1 ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_1') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_2">Choice 2*</label>
                                    <input class="form-control <?php echo form_error('choice_2') ? 'is-invalid' : '' ?>" type="text" name="choice_2" min="0" placeholder="Choice 2" value="<?php echo $question->choice_2 ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_2') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_3">Choice 3*</label>
                                    <input class="form-control <?php echo form_error('choice_3') ? 'is-invalid' : '' ?>" type="text" name="choice_3" min="0" placeholder="Choice 3" value="<?php echo $question->choice_3 ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_3') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choice_4">Choice 4*</label>
                                    <input class="form-control <?php echo form_error('choice_4') ? 'is-invalid' : '' ?>" type="text" name="choice_4" min="0" placeholder="Choice 4" value="<?php echo $question->choice_4 ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('choice_4') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <input class="form-control <?php echo form_error('answer') ? 'is-invalid' : '' ?>" type="text" name="answer" min="0" placeholder="Answer" value="<?php echo $question->answer ?>" />
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
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>