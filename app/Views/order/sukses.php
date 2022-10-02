<main id="main">
    <?php if (!empty(session())) { ?><?php } ?>
    <div class="flash-data" data-flashdata="<?= session()->getflashdata('berhasil') ?>"></div>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo $title ?></h2>
                <ol>
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="order" class="contact">
        <div class="container">
            <div class="d-flex justify-content-center">
                <label>Klik Tombol ' Continue to Chat ' untuk konfirmasi bukti pemesanan paket.</label>
            </div>
            <div class="d-flex justify-content-center pt-2">
                <label>Bukti Pemesanan</label>
            </div>
            <div class="d-flex justify-content-center py-2">
                <i class="fas fa-arrow-down"></i>
            </div>
            <div class="d-flex justify-content-center pt-2 row">
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="<?php echo base_url('order/unduh/' . $file_bukti) ?>" class="btn btn-success btn-sm btn-block" style="width: 210px;height: 50px;border-radius: 30px;padding-top: 11px;font-size: 16px;"><i class="fa fa-download" style="padding-right: 6px;"></i> <strong>Bukti Pemesanan</strong></a>
                </div>
                <div class="col-md-6">
                    <a href="https://wa.me/<?php echo telepon() ?>?" target="_blank" class="btn text-white order" style="background-color: #3fbbc0;border-radius: 30px;height: 50px;width: 210px;font-size: 16px;padding-top:11px;"><i class="fab fa-whatsapp" style="padding-right: 6px;"></i> <strong>Continue to Chat</strong></a>
                </div>
            </div>

            <!-- <div class="d-flex justify-content-center" style="padding-top: 50px;">
                <a href="https://wa.me/<?php echo telepon() ?>?" target="_blank" class="btn text-white order" style="background-color: #3fbbc0;border-radius: 30px;height: 50px;width: 200px;font-size: 16px;padding-top:11px;">Continue to Chat</a>
            </div> -->
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->