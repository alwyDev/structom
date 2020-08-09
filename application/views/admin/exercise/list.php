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
                    <h1 class="mt-4">Questions</h1>
                    <!-- <?php $this->load->view("admin/_partials/breadcrumb.php") ?> -->

                    <!-- DataTables -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/exercise/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Question</th>
                                            <th>Choice 1</th>
                                            <th>Choice 2</th>
                                            <th>Choice 3</th>
                                            <th>Choice 4</th>
                                            <th>Choice 5</th>
                                            <th>Answer</th>
                                            <th>Analisa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($exercise as $exercise) : ?>
                                            <tr>
                                                <td width="50">
                                                    <?php echo $exercise->no ?>
                                                </td>
                                                <td width="500">
                                                    <?php echo $exercise->question ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->choice_1 ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->choice_2 ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->choice_3 ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->choice_4 ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->choice_5 ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->answer ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $exercise->analisa ?>
                                                </td>
                                                <td width="150">
                                                    <a href="<?php echo site_url('admin/exercise/edit/' . $exercise->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/exercise/delete/' . $exercise->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>