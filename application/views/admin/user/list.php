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
                    <h1 class="mt-4">Students</h1>
                    <!-- <?php $this->load->view("admin/_partials/breadcrumb.php") ?> -->

                    <!-- DataTables -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/users/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $user) : ?>
                                            <tr>
                                                <td width="100">
                                                    <?php echo $user->nis ?>
                                                </td>
                                                <td width="250">
                                                    <?php echo $user->name ?>
                                                </td>
                                                <td width="150">
                                                    <?php echo $user->email ?>
                                                </td>
                                                <td width="100">
                                                    <?php echo $user->phone ?>
                                                </td>
                                                <td width="150">
                                                    <a href="<?php echo site_url('admin/users/edit/' . $user->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/users/delete/' . $user->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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