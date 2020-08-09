<div class="sb-sidenav-menu">
    <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="<?php echo site_url('overview') ?>">
            <div class="sb-nav-link-icon <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>"><i class="fas fa-home"></i></div>
            Home
        </a>
        <a class="nav-link" href="<?= base_url(); ?>admin/exercise">
            <div class="sb-nav-link-icon"><i class="fas fa-align-left"></i></div>
            Soal Latihan
        </a>
        <a class="nav-link" href="<?= base_url(); ?>admin/questions">
            <div class="sb-nav-link-icon"><i class="fas fa-align-left"></i></div>
            Soal Evaluasi
        </a>
        <a class="nav-link" href="<?= base_url(); ?>admin/scores">
            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
            Nilai Evaluasi
        </a>
        <a class="nav-link" href="<?= base_url(); ?>admin/users">
            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
            Daftar Murid
        </a>
    </div>
</div>