<?php

use App\Models\Menu_model;

$menu         = new Menu_model();
$berita       = $menu->berita();
$profil       = $menu->profil();
$layanan      = $menu->layanan();
?>

<!-- ======= Hero Section ======= -->

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">
      <?php $noslide = 1;
      foreach ($slider as $slider) {  ?>
        <!-- Slide 1 -->
        <div class="carousel-item<?php if ($noslide == 1) {
                                    echo ' active';
                                  } ?>" style="background-image: url(<?php echo base_url('assets/upload/image/' . $slider['gambar']) ?>)">
          <?php if ($slider['status_text'] == "Ya") {  ?>
            <div class="container" style="max-width: 70%; text-align: center; padding-left: 2%; padding-right: 2%;">
              <h2><?php echo $slider['judul_galeri'] ?></h2>
              <p><?php echo $slider['isi'] ?></p>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12"><a href="#paket" class="btn-get-started scrollto">Paket Usaha</a></div>
                  </div>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          <?php } ?>
        </div>
      <?php $noslide++;
      } ?>
    </div>


    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>
<!-- End Hero -->


<main id="main">




  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>Selamat datang di <?php echo $konfigurasi['namaweb'] ?></h3>
        <p><?php echo $konfigurasi['tagline'] ?></p>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About <?php echo $konfigurasi['namaweb'] ?></h2>
        <?php echo $konfigurasi['deskripsi'] ?>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="<?php echo icon() ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <?php echo $konfigurasi['tentang'] ?>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Paket Section ======= -->
  <section id="paket" class="paket" style="background: #F5FFFF;">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Paket</h2>
        <p>Berikut paket yang ditawarkan oleh <?php echo namaweb() ?>. Yang Pastinya Terjamin Murah Harganya.!!!</p>
      </div>
      <?php $pr = 1;
      foreach ($terbaik as $data) { ?>
        <div class="row d-flex justify-content-center">
          <?php if ($data['jumlah'] > 0) { ?>
            <div style="padding-top: 50px;"></div>
            <?php foreach ($paket as $data_paket) { ?>
              <?php if ($data_paket['status_paket'] == "Publish") { ?>
                <?php if ($data_paket['status'] == "Terbaik") { ?>
                  <div class="col-md-4" style="margin-top: -45px;" data-aos="zoom-in" data-aos-delay="<?php echo $pr ?>00">
                    <div class="card shadow-lg p-0 mb-5 border-4 border-warning" style="border-radius: 20px;margin-top: -10px;">
                      <div class="bg-warning text-white text-center py-2" style="border-radius: 15px;">
                        <h4>Penawaran Terbaik !!</h4>
                      </div>
                      <div class="bg-warning py-2" style="margin-top: -16px;"></div>
                      <div class="card-body px-4">
                        <div style="margin-bottom: 15px;"></div>
                        <h2 class="card-title bg-black pt-3 pb-1 fw-bold"><?php echo $data_paket['kategori'] ?></h2>
                        <p class="mb-0">Modul Pembelajaran : Rp. <?php if ($data_paket['modul_pembelajaran'] >= 1000 && $data_paket['modul_pembelajaran'] < 10000) {
                                                                    echo $data_paket['modul_pembelajaran'];
                                                                  } else if ($data_paket['modul_pembelajaran'] >= 10000 && $data_paket['modul_pembelajaran'] < 100000) {
                                                                    echo substr($data_paket['modul_pembelajaran'], 0, 2) . ".000";
                                                                  } else if ($data_paket['modul_pembelajaran'] >= 100000 && $data_paket['modul_pembelajaran'] < 1000000) {
                                                                    echo substr($data_paket['modul_pembelajaran'], 0, 3) . ".000";
                                                                  } else if ($data_paket['modul_pembelajaran'] >= 1000000 && $data_paket['modul_pembelajaran'] < 10000000) {
                                                                    $awal = substr($data_paket['modul_pembelajaran'], 0, 1) . ".";
                                                                    $tengah = substr($data_paket['modul_pembelajaran'], 1, 3) . ".";
                                                                    $akhir = substr($data_paket['modul_pembelajaran'], 4, 3);
                                                                    echo $awal . $tengah . $akhir;
                                                                  } ?></p>
                        <p class="mb-0">Pendaftaran : Rp. <?php if ($data_paket['pendaftaran'] >= 1000 && $data_paket['pendaftaran'] < 10000) {
                                                            echo $data_paket['pendaftaran'];
                                                          } else if ($data_paket['pendaftaran'] >= 10000 && $data_paket['pendaftaran'] < 100000) {
                                                            echo substr($data_paket['pendaftaran'], 0, 2) . ".000";
                                                          } else if ($data_paket['pendaftaran'] >= 100000 && $data_paket['pendaftaran'] < 1000000) {
                                                            echo substr($data_paket['pendaftaran'], 0, 3) . ".000";
                                                          } else if ($data_paket['pendaftaran'] >= 1000000 && $data_paket['pendaftaran'] < 10000000) {
                                                            $awal = substr($data_paket['pendaftaran'], 0, 1) . ".";
                                                            $tengah = substr($data_paket['pendaftaran'], 1, 3) . ".";
                                                            $akhir = substr($data_paket['pendaftaran'], 4, 3);
                                                            echo $awal . $tengah . $akhir;
                                                          } ?></p>
                        <div class="p-3"></div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="py-2 px-2 text-center text-white fw-bold" style="border-radius: 4px; background-color: red;">Diskon <?php echo $data_paket['diskon'] ?></div>
                          </div>
                          <div class="col-md-6 d-flex justify-content-center">
                            <div class="py-2 px-2 text-center text-decoration-line-through text-muted">Rp. <?php if ($data_paket['harga'] >= 1000 && $data_paket['harga'] < 10000) {
                                                                                                              echo $data_paket['harga'];
                                                                                                            } else if ($data_paket['harga'] >= 10000 && $data_paket['harga'] < 100000) {
                                                                                                              echo substr($data_paket['harga'], 0, 2) . ".000";
                                                                                                            } else if ($data_paket['harga'] >= 100000 && $data_paket['harga'] < 1000000) {
                                                                                                              echo substr($data_paket['harga'], 0, 3) . ".000";
                                                                                                            } else if ($data_paket['harga'] >= 1000000 && $data_paket['harga'] < 10000000) {
                                                                                                              $awal = substr($data_paket['harga'], 0, 1) . ".";
                                                                                                              $tengah = substr($data_paket['harga'], 1, 3) . ".";
                                                                                                              $akhir = substr($data_paket['harga'], 4, 3);
                                                                                                              echo $awal . $tengah . $akhir;
                                                                                                            } ?>/bln</div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center p-2">
                        <h3 class="fw-bold mb-0">Rp. <?php if ($data_paket['harga_diskon'] >= 1000 && $data_paket['harga_diskon'] < 10000) {
                                                        echo $data_paket['harga_diskon'];
                                                      } else if ($data_paket['harga_diskon'] >= 10000 && $data_paket['harga_diskon'] < 100000) {
                                                        echo substr($data_paket['harga_diskon'], 0, 2) . ".000";
                                                      } else if ($data_paket['harga_diskon'] >= 100000 && $data_paket['harga_diskon'] < 1000000) {
                                                        echo substr($data_paket['harga_diskon'], 0, 3) . ".000";
                                                      } else if ($data_paket['harga_diskon'] >= 1000000 && $data_paket['harga_diskon'] < 10000000) {
                                                        $awal = substr($data_paket['harga_diskon'], 0, 1) . ".";
                                                        $tengah = substr($data_paket['harga_diskon'], 1, 3) . ".";
                                                        $akhir = substr($data_paket['harga_diskon'], 4, 3);
                                                        echo $awal . $tengah . $akhir;
                                                      } ?></h3>
                      </div>
                      <div class="card-body px-4 d-flex justify-content-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo telepon() ?>&text=Halo%20<?php echo namaweb() ?>.%20%0A%0ASaya%20tertarik%20dengan%20paket%20%22<?php echo strtoupper($data_paket['kategori']); ?>%22%20yang%20anda%20tawarkan.%0ASaya%20ingin%20memesan%20paket%20tersebut.%20%0A%0ATerima%20Kasih." class="btn btn-warning fw-bold text-white" style="border-radius: 30px;height: 50px;width: 200px;font-size: 20px;padding-top:8px;">Pilih Paket</a>
                      </div>
                      <div class="px-3">
                        <?php foreach ($fasilitas as $data_fasilitas) { ?>
                          <?php if ($data_paket['id'] == $data_fasilitas['id_paket']) { ?>
                            <div class="p-2"><i class="bi bi-check-circle-fill" style="color: #3fbbc0;padding-right: 15px;"></i> <?php echo $data_fasilitas['fasilitas']; ?></div>
                          <?php } ?>
                        <?php } ?>
                      </div>
                      <div class="pb-4 pl-4 pr-4"></div>
                      <div class="pl-4 pr-4" style="padding-bottom: 14px;"></div>
                    </div>
                  </div>
                <?php } else { ?>
                  <div class="col-md-4" data-aos="zoom-in" data-aos-delay="<?php echo $pr ?>00">
                    <div class="card shadow-sm p-3 mb-5" style="border-radius: 20px;">
                      <div class="card-body">
                        <h2 class="card-title bg-black pt-3 pb-1 fw-bold"><?php echo $data_paket['kategori'] ?></h2>
                        <p class="mb-0">Modul Pembelajaran : Rp. <?php if ($data_paket['modul_pembelajaran'] >= 1000 && $data_paket['modul_pembelajaran'] < 10000) {
                                                                    echo $data_paket['modul_pembelajaran'];
                                                                  } else if ($data_paket['modul_pembelajaran'] >= 10000 && $data_paket['modul_pembelajaran'] < 100000) {
                                                                    echo substr($data_paket['modul_pembelajaran'], 0, 2) . ".000";
                                                                  } else if ($data_paket['modul_pembelajaran'] >= 100000 && $data_paket['modul_pembelajaran'] < 1000000) {
                                                                    echo substr($data_paket['modul_pembelajaran'], 0, 3) . ".000";
                                                                  } else if ($data_paket['modul_pembelajaran'] >= 1000000 && $data_paket['modul_pembelajaran'] < 10000000) {
                                                                    $awal = substr($data_paket['modul_pembelajaran'], 0, 1) . ".";
                                                                    $tengah = substr($data_paket['modul_pembelajaran'], 1, 3) . ".";
                                                                    $akhir = substr($data_paket['modul_pembelajaran'], 4, 3);
                                                                    echo $awal . $tengah . $akhir;
                                                                  } ?></p>
                        <p class="mb-0">Pendaftaran : Rp. <?php if ($data_paket['pendaftaran'] >= 1000 && $data_paket['pendaftaran'] < 10000) {
                                                            echo $data_paket['pendaftaran'];
                                                          } else if ($data_paket['pendaftaran'] >= 10000 && $data_paket['pendaftaran'] < 100000) {
                                                            echo substr($data_paket['pendaftaran'], 0, 2) . ".000";
                                                          } else if ($data_paket['pendaftaran'] >= 100000 && $data_paket['pendaftaran'] < 1000000) {
                                                            echo substr($data_paket['pendaftaran'], 0, 3) . ".000";
                                                          } else if ($data_paket['pendaftaran'] >= 1000000 && $data_paket['pendaftaran'] < 10000000) {
                                                            $awal = substr($data_paket['pendaftaran'], 0, 1) . ".";
                                                            $tengah = substr($data_paket['pendaftaran'], 1, 3) . ".";
                                                            $akhir = substr($data_paket['pendaftaran'], 4, 3);
                                                            echo $awal . $tengah . $akhir;
                                                          } ?></p>
                        <div class="p-3"></div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="py-2 px-2 text-center text-white fw-bold" style="border-radius: 4px; background-color: #3fbbc0;"><?php if ($data_paket['status'] == "Diskon") {
                                                                                                                                            echo "Diskon " . $data_paket['diskon'];
                                                                                                                                          } else {
                                                                                                                                            echo "Termurah";
                                                                                                                                          } ?></div>
                          </div>
                          <?php if ($data_paket['status'] == "Diskon") { ?>
                            <div class="col-md-6 d-flex justify-content-center">
                              <div class="py-2 px-2 text-center text-decoration-line-through text-muted">Rp. <?php if ($data_paket['harga'] >= 1000 && $data_paket['harga'] < 10000) {
                                                                                                                echo $data_paket['harga'];
                                                                                                              } else if ($data_paket['harga'] >= 10000 && $data_paket['harga'] < 100000) {
                                                                                                                echo substr($data_paket['harga'], 0, 2) . ".000";
                                                                                                              } else if ($data_paket['harga'] >= 100000 && $data_paket['harga'] < 1000000) {
                                                                                                                echo substr($data_paket['harga'], 0, 3) . ".000";
                                                                                                              } else if ($data_paket['harga'] >= 1000000 && $data_paket['harga'] < 10000000) {
                                                                                                                $awal = substr($data_paket['harga'], 0, 1) . ".";
                                                                                                                $tengah = substr($data_paket['harga'], 1, 3) . ".";
                                                                                                                $akhir = substr($data_paket['harga'], 4, 3);
                                                                                                                echo $awal . $tengah . $akhir;
                                                                                                              } ?>/bln</div>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="text-center p-2">
                        <h3 class="fw-bold mb-0">Rp. <?php if ($data_paket['harga_diskon'] >= 1000 && $data_paket['harga_diskon'] < 10000) {
                                                        echo $data_paket['harga_diskon'];
                                                      } else if ($data_paket['harga_diskon'] >= 10000 && $data_paket['harga_diskon'] < 100000) {
                                                        echo substr($data_paket['harga_diskon'], 0, 2) . ".000";
                                                      } else if ($data_paket['harga_diskon'] >= 100000 && $data_paket['harga_diskon'] < 1000000) {
                                                        echo substr($data_paket['harga_diskon'], 0, 3) . ".000";
                                                      } else if ($data_paket['harga_diskon'] >= 1000000 && $data_paket['harga_diskon'] < 10000000) {
                                                        $awal = substr($data_paket['harga_diskon'], 0, 1) . ".";
                                                        $tengah = substr($data_paket['harga_diskon'], 1, 3) . ".";
                                                        $akhir = substr($data_paket['harga_diskon'], 4, 3);
                                                        echo $awal . $tengah . $akhir;
                                                      } ?></h3>
                      </div>
                      <div class="card-body d-flex justify-content-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo telepon() ?>&text=Halo%20<?php echo namaweb() ?>.%20%0A%0ASaya%20tertarik%20dengan%20paket%20%22<?php echo strtoupper($data_paket['kategori']); ?>%22%20yang%20anda%20tawarkan.%0ASaya%20ingin%20memesan%20paket%20tersebut.%20%0A%0ATerima%20Kasih." class="btn btn-outline-warning fw-bold" style="border-radius: 30px;height: 50px;width: 200px;font-size: 20px;padding-top:8px;">Pilih Paket</a>
                      </div>
                      <div class="px-2">
                        <?php foreach ($fasilitas as $data_fasilitas) { ?>
                          <?php if ($data_paket['id'] == $data_fasilitas['id_paket']) { ?>
                            <div class="p-2"><i class="bi bi-check-circle-fill" style="color: #3fbbc0;padding-right: 15px;"></i> <?php echo $data_fasilitas['fasilitas']; ?></div>
                          <?php } ?>
                        <?php } ?>
                      </div>
                      <div class="pb-4"></div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php $pr = $pr + 4;
            } ?>
          <?php } else { ?>
            <?php foreach ($paket as $data_paket) { ?>
              <?php if ($data_paket['status_paket'] == "Publish") { ?>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="<?php echo $pr ?>00">
                  <div class="card shadow-sm p-3 mb-5" style="border-radius: 20px;">
                    <div class="card-body">
                      <h2 class="card-title bg-black pt-3 pb-1 fw-bold"><?php echo $data_paket['kategori'] ?></h2>
                      <p class="mb-0">Modul Pembelajaran : Rp. <?php if ($data_paket['modul_pembelajaran'] >= 1000 && $data_paket['modul_pembelajaran'] < 10000) {
                                                                  echo $data_paket['modul_pembelajaran'];
                                                                } else if ($data_paket['modul_pembelajaran'] >= 10000 && $data_paket['modul_pembelajaran'] < 100000) {
                                                                  echo substr($data_paket['modul_pembelajaran'], 0, 2) . ".000";
                                                                } else if ($data_paket['modul_pembelajaran'] >= 100000 && $data_paket['modul_pembelajaran'] < 1000000) {
                                                                  echo substr($data_paket['modul_pembelajaran'], 0, 3) . ".000";
                                                                } else if ($data_paket['modul_pembelajaran'] >= 1000000 && $data_paket['modul_pembelajaran'] < 10000000) {
                                                                  $awal = substr($data_paket['modul_pembelajaran'], 0, 1) . ".";
                                                                  $tengah = substr($data_paket['modul_pembelajaran'], 1, 3) . ".";
                                                                  $akhir = substr($data_paket['modul_pembelajaran'], 4, 3);
                                                                  echo $awal . $tengah . $akhir;
                                                                } ?></p>
                      <p class="mb-0">Pendaftaran : Rp. <?php if ($data_paket['pendaftaran'] >= 1000 && $data_paket['pendaftaran'] < 10000) {
                                                          echo $data_paket['pendaftaran'];
                                                        } else if ($data_paket['pendaftaran'] >= 10000 && $data_paket['pendaftaran'] < 100000) {
                                                          echo substr($data_paket['pendaftaran'], 0, 2) . ".000";
                                                        } else if ($data_paket['pendaftaran'] >= 100000 && $data_paket['pendaftaran'] < 1000000) {
                                                          echo substr($data_paket['pendaftaran'], 0, 3) . ".000";
                                                        } else if ($data_paket['pendaftaran'] >= 1000000 && $data_paket['pendaftaran'] < 10000000) {
                                                          $awal = substr($data_paket['pendaftaran'], 0, 1) . ".";
                                                          $tengah = substr($data_paket['pendaftaran'], 1, 3) . ".";
                                                          $akhir = substr($data_paket['pendaftaran'], 4, 3);
                                                          echo $awal . $tengah . $akhir;
                                                        } ?></p>
                      <div class="p-3"></div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="py-2 px-2 text-center text-white fw-bold" style="border-radius: 4px; background-color: #3fbbc0;"><?php if ($data_paket['status'] == "Diskon") {
                                                                                                                                          echo "Diskon " . $data_paket['diskon'];
                                                                                                                                        } else {
                                                                                                                                          echo "Termurah";
                                                                                                                                        } ?></div>
                        </div>
                        <?php if ($data_paket['status'] == "Diskon") { ?>
                          <div class="col-md-6 d-flex justify-content-center">
                            <div class="py-2 px-2 text-center text-decoration-line-through text-muted">Rp. <?php if ($data_paket['harga'] >= 1000 && $data_paket['harga'] < 10000) {
                                                                                                              echo $data_paket['harga'];
                                                                                                            } else if ($data_paket['harga'] >= 10000 && $data_paket['harga'] < 100000) {
                                                                                                              echo substr($data_paket['harga'], 0, 2) . ".000";
                                                                                                            } else if ($data_paket['harga'] >= 100000 && $data_paket['harga'] < 1000000) {
                                                                                                              echo substr($data_paket['harga'], 0, 3) . ".000";
                                                                                                            } else if ($data_paket['harga'] >= 1000000 && $data_paket['harga'] < 10000000) {
                                                                                                              $awal = substr($data_paket['harga'], 0, 1) . ".";
                                                                                                              $tengah = substr($data_paket['harga'], 1, 3) . ".";
                                                                                                              $akhir = substr($data_paket['harga'], 4, 3);
                                                                                                              echo $awal . $tengah . $akhir;
                                                                                                            } ?>/bln</div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="text-center p-2">
                      <h3 class="fw-bold mb-0">Rp. <?php if ($data_paket['harga_diskon'] >= 1000 && $data_paket['harga_diskon'] < 10000) {
                                                      echo $data_paket['harga_diskon'];
                                                    } else if ($data_paket['harga_diskon'] >= 10000 && $data_paket['harga_diskon'] < 100000) {
                                                      echo substr($data_paket['harga_diskon'], 0, 2) . ".000";
                                                    } else if ($data_paket['harga_diskon'] >= 100000 && $data_paket['harga_diskon'] < 1000000) {
                                                      echo substr($data_paket['harga_diskon'], 0, 3) . ".000";
                                                    } else if ($data_paket['harga_diskon'] >= 1000000 && $data_paket['harga_diskon'] < 10000000) {
                                                      $awal = substr($data_paket['harga_diskon'], 0, 1) . ".";
                                                      $tengah = substr($data_paket['harga_diskon'], 1, 3) . ".";
                                                      $akhir = substr($data_paket['harga_diskon'], 4, 3);
                                                      echo $awal . $tengah . $akhir;
                                                    } ?></h3>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                      <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo telepon() ?>&text=Halo%20<?php echo namaweb() ?>.%20%0A%0ASaya%20tertarik%20dengan%20paket%20%22<?php echo strtoupper($data_paket['kategori']); ?>%22%20yang%20anda%20tawarkan.%0ASaya%20ingin%20memesan%20paket%20tersebut.%20%0A%0ATerima%20Kasih." class="btn btn-outline-warning fw-bold" style="border-radius: 30px;height: 50px;width: 200px;font-size: 20px;padding-top:8px;">Pilih Paket</a>
                    </div>
                    <div class="px-2">
                      <?php foreach ($fasilitas as $data_fasilitas) { ?>
                        <?php if ($data_paket['id'] == $data_fasilitas['id_paket']) { ?>
                          <div class="p-2"><i class="bi bi-check-circle-fill" style="color: #3fbbc0;padding-right: 15px;"></i> <?php echo $data_fasilitas['fasilitas']; ?></div>
                        <?php } ?>
                      <?php } ?>
                    </div>
                    <div class="pb-4"></div>
                  </div>
                </div>
              <?php } ?>
            <?php $pr = $pr + 4;
            } ?>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- ======= End Paket Section ======= -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Layanan Kami</h2>
        <p>Yuk gunakan layanan yang ada di <?php echo namaweb() ?>. <?php echo tagline() ?></p>
      </div>

      <div class="row">
        <?php $ml = 1;
        foreach ($layanan as $layanan) { ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="<?php echo $ml; ?>00">
            <div class="icon"><i class="<?php echo $layanan['icon'] ?>"></i></div>
            <h4 class="title"><a href="<?php echo base_url('berita/layanan/' . $layanan['slug_berita']) ?>"><?php echo $layanan['judul_berita'] ?></a></h4>
            <p class="description"><?php echo $layanan['ringkasan'] ?></p>
          </div>
        <?php $ml++;
        } ?>
      </div>

    </div>
  </section><!-- End Services Section -->
  <?php include('berita.php') ?>
  <?php include('client.php') ?>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div>
      <style type="text/css" media="screen">
        iframe {
          min-height: 300px;
          width: 100%;
        }
      </style>
      <?php echo google_map() ?>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->