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
  <a href="<?php echo base_url('admin/dasbor') ?>" class="brand-link">
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
        <a href="<?php echo base_url('admin/akun') ?>" class="d-block"><?php echo $session->get('nama') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dahboard -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?php echo base_url('admin/visitor_state') ?>" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>Visitor State</p>
          </a>
        </li> -->
        <!-- Berita -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>Berita, Profil &amp; Layanan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/berita') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Berita/Profil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/berita/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Berita/Profil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/kategori') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Kategori Berita/Profil</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Galeri -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>Galeri &amp; Banner
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/galeri') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Galeri/Banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/galeri/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Galeri/Banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/kategori_galeri') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Kategori Galeri/Banner</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Paket -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>Paket Privat
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/paket') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Paket Privat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/paket/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Paket Privat</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?php echo base_url('admin/kategori_paket') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Fasilitas Paket Privat</p>
              </a>
            </li> -->
          </ul>
        </li>
        <!-- Order -->
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-basket"></i>
            <p>Order Paket
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/keranjang') ?>" class="nav-link">
                <i class="fas fa-shopping-cart nav-icon"></i>
                <p>Keranjang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/pesanan') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Order</p>
              </a>
            </li>
          </ul>
        </li> -->
        <!-- Download -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-download"></i>
            <p>Data File Download
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/download') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data File Download</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/download/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah File Download</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/kategori_download') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Kategori File Download</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Video -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fab fa-youtube"></i>
            <p>Data Video Youtube
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/video') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Video Youtube</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/video/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Video Youtube</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Client & Portofolio -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-thumbs-up"></i>
            <p>Testimoni
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/client') ?>" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>Data Testimoni</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/client/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Testimoni</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Staff -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Staff &amp; Team
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/staff') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Staff/Team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/staff/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Staff/Team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/kategori_staff') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Kategori Staff/Team</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- pengguna -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-lock"></i>
            <p>Pengguna Website
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/user') ?>" class="nav-link">
                <i class="nav-icon fas fa-lock"></i>
                <p>Data Pengguna Website</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/user/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Pengguna Website</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Konfigurasi -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wrench"></i>
            <p>Setting Website
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/konfigurasi') ?>" class="nav-link">
                <i class="fas fa-tasks nav-icon"></i>
                <p>Konfigurasi Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/konfigurasi/logo') ?>" class="nav-link">
                <i class="fas fa-image nav-icon"></i>
                <p>Update Logo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/konfigurasi/icon') ?>" class="nav-link">
                <i class="fas fa-leaf nav-icon"></i>
                <p>Update Icon</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/konfigurasi/seo') ?>" class="nav-link">
                <i class="fab fa-google nav-icon"></i>
                <p>Setting SEO &amp; Metatext</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- panduan -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin/panduan') ?>" class="nav-link">
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dasbor') ?>">Dashboard</a></li>
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