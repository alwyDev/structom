<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">

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
                    <h1 class="mt-4">Home</h1>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2>Selamat Datang</h1>
                            <br>
                            <h5>Ini adalah aplikasi untuk membuat soal dan melihat score para murid.</h5>
                            <br>
                            <h5>Kamu dapat menambahkan dan mengedit soal di halaman 'Questions', menambahkan data siswa di halaman 'Students' dan melihat nilai para siswa di halaman 'Score'.</h5>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>