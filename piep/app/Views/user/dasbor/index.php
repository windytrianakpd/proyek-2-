<?php
$session = \Config\Services::session();

use App\Models\Dasbor_model;

$m_dasbor = new Dasbor_model();
?>
<div class="alert alert-info">
  <h4>Hai <em class="text-warning"><?php echo $session->get('nama') ?></em></h4>
  <hr>
  <p>Selamat datang di website <strong><?php echo namaweb() ?></strong>. <?= $konfigurasi['tagline'] ?></p>
</div>

<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-danger">
      <span class="info-box-icon"><i class="fas fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Hari ini</span>
        <span class="views-hari-ini info-box-number"></span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%"></div>
        </div>
        <span class="progress-description">
          100% in 1 Day
        </span>
      </div>
    </div>
  </div>
  <div class="clearfix hidden-md-up"></div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="fas fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Bulan ini</span>
        <span class="views-bulan-kemarin info-box-number"></span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%"></div>
        </div>
        <span class="progress-description">
          100% in 1 Month
        </span>
      </div>
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-warning">
      <span class="info-box-icon"><i class="fas fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Tahun ini</span>
        <span class="views-tahun-kemarin info-box-number"></span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%"></div>
        </div>
        <span class="progress-description">
          100% in 1 Year
        </span>
      </div>
    </div>
  </div>
  <!-- /.col -->
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box bg-info">
      <span class="info-box-icon"><i class="fas fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total</span>
        <span class="views-total info-box-number"></span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%"></div>
        </div>
        <span class="progress-description">
          100% off all data
        </span>
      </div>
    </div>
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->

</div>

<hr class="pb-3">

<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Berita</span>
        <span class="info-box-number">
          <?php echo angka($m_dasbor->berita()) ?>
          <small>Konten</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Clients
        </span>
        <span class="info-box-number"><?php echo angka($m_dasbor->client()) ?><small> Klien</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Staff
        </span>
        <span class="info-box-number"><?php echo angka($m_dasbor->staff()) ?><small> Staf</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-lock"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Pengguna Web
        </span>
        <span class="info-box-number"><?php echo angka($m_dasbor->user()) ?><small> Pengguna</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<div class="row">
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-download"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          File Download
        </span>
        <span class="info-box-number"><?php echo angka($m_dasbor->download()) ?><small> File</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-images"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Galeri &amp; Banner
        </span>
        <span class="info-box-number">
          <?php echo angka($m_dasbor->galeri()) ?>
          <small>Konten</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fab fa-youtube"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Video Youtube
        </span>
        <span class="info-box-number"><?php echo angka($m_dasbor->video()) ?><small> Video</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tags"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Kategori Berita
        </span>
        <span class="info-box-number"><?php echo angka($m_dasbor->kategori()) ?><small> Kategori</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

</div>
<!-- /.row -->

<div class="row">
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tags"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Kategori Paket</span>
        <span class="info-box-number">
          <?php echo angka($m_dasbor->kategori_paket()) ?>
          <small> Kategori</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <!-- <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-basket"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">
          Orderan Paket
        </span>
        <span class="info-box-number">
          <?php echo angka($m_dasbor->order_paket()) ?>
          <small>Customer</small>
        </span>
      </div>
    </div>
  </div> -->

</div>
<!-- /.row -->
<hr class="pb-3">

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
          <i class="mr-1 fas fa-chart-line"></i>
          Perbulan
        </h3>
      </div><!-- /.card-header -->
      <div class="card-body p-2" style="height: 500px;">
        <div id="curve_chart" style="width: 100%;height: 100%;"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
          <i class="mr-1 fas fa-chart-line"></i>
          Perhari
        </h3>
      </div><!-- /.card-header -->
      <div class="card-body p-2" style="height: 300px;">
        <div id="hari_curve_chart" style="width: 100%;height: 100%;"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
          <i class="mr-1 fas fa-chart-line"></i>
          Pertahun
        </h3>
      </div><!-- /.card-header -->
      <div class="card-body p-2" style="height: 300px;">
        <div id="tahun_curve_chart" style="width: 100%;height: 100%;"></div>
      </div>
    </div>
  </div>
</div>