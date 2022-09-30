<?php

use App\Models\Konfigurasi_model;
use App\Models\User_model;

$session = \Config\Services::session();
$konfigurasi  = new Konfigurasi_model;
$user         = new User_model;
$site         = $konfigurasi->listing();
$akun         = $user->listing_user($session->get('id_user'));
?>

<style type="text/css" media="screen">
  .nav-item a:hover {
    color: yellow !important;
  }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('user/dasbor') ?>" class="brand-link">
    <img src="<?php echo base_url('assets/upload/image/' . $site['icon']) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $site['namaweb'] ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>/assets/upload/image/<?php echo $akun[0]['gambar'] ?>" class="img-circle elevation-2" style="height: 35px;width: 35px;" alt="User Image">
      </div>
      <div class="info">
        <a href="<?php echo base_url('user/akun') ?>" class="d-block"><?php echo $session->get('nama') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dahboard -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/dasbor') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- Berita -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/berita') ?>" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>Berita, Profil &amp; Layanan</p>
          </a>
        </li>
        <!-- Galeri -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/galeri') ?>" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>Galeri &amp; Banner</p>
          </a>
        </li>
        <!-- Paket -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/paket') ?>" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>Paket Privat</p>
          </a>
        </li>
        <!-- Order -->
        <!-- Download -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/download') ?>" class="nav-link">
            <i class="nav-icon fa fa-download"></i>
            <p>Data File Download</p>
          </a>
        </li>
        <!-- Video -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/video') ?>" class="nav-link">
            <i class="nav-icon fab fa-youtube"></i>
            <p>Data Video Youtube</p>
          </a>
        </li>
        <!-- Client & Portofolio -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/client') ?>" class="nav-link">
            <i class="nav-icon fas fa-thumbs-up"></i>
            <p>Testimoni</p>
          </a>
        </li>
        <!-- Staff -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/staff') ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Staff &amp; Team</p>
          </a>
        </li>
        <!-- panduan -->
        <li class="nav-item">
          <a href="<?php echo base_url('user/panduan') ?>" class="nav-link">
            <i class="nav-icon fas fa-file-pdf"></i>
            <p>Panduan &amp; Manual Book</p>
          </a>
        </li>
        <!-- logout -->
        <li class="nav-item">
          <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('user/dasbor') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


              <?php
              $validation = \Config\Services::validation();
              $errors = $validation->getErrors();
              if (!empty($errors)) {
                echo '<span class="text-danger">' . $validation->listErrors() . '</span>';
              }
              ?>

              <?php if (session('msg')) : ?>
                <div class="alert alert-info alert-dismissible">
                  <?= session('msg') ?>
                  <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                </div>
              <?php endif ?>