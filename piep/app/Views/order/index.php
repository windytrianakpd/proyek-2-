<main id="main">
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
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="<?php echo base_url('order/sukses') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php
                        echo csrf_field();
                        ?>

                        <div class="form-group row">
                            <label class="col-3 fw-bold">Jenis Kategori</label>
                            <input type="hidden" name="idPaket" class="form-control" readonly value="<?php echo $paket['id'] ?>">
                            <div class="col-4">
                                <input type="text" name="kategori" class="form-control" readonly value="<?php echo $paket['kategori'] ?>">
                            </div>
                            <div class="col-3">
                                <input type="hidden" name="harga" value="<?php echo $paket['harga'] ?>">
                                <input type="text" class="form-control" readonly value="Rp. <?php if ($paket['harga'] >= 1000 && $paket['harga'] < 10000) {
                                                                                                echo $paket['harga'];
                                                                                            } else if ($paket['harga'] >= 10000 && $paket['harga'] < 100000) {
                                                                                                echo substr($paket['harga'], 0, 2) . ".000";
                                                                                            } else if ($paket['harga'] >= 100000 && $paket['harga'] < 1000000) {
                                                                                                echo substr($paket['harga'], 0, 3) . ".000";
                                                                                            } else if ($paket['harga'] >= 1000000 && $paket['harga'] < 10000000) {
                                                                                                $awal = substr($paket['harga'], 0, 1) . ".";
                                                                                                $tengah = substr($paket['harga'], 1, 3) . ".";
                                                                                                $akhir = substr($paket['harga'], 4, 3);
                                                                                                echo $awal . $tengah . $akhir;
                                                                                            } ?>">
                                <small class="text-secondary">Harga</small>
                            </div>
                            <div class="col-2">
                                <input type="hidden" name="diskon" value="<?php echo $paket['diskon'] ?>">
                                <input type="text" class="form-control" readonly value="<?php echo $paket['diskon'] ?>">
                                <small class="text-secondary">Diskon</small>
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                            <label class="col-3 fw-bold">Nama Pemesan</label>
                            <div class="col-9">
                                <input type="text" name="pemesan" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                            <label class="col-3 fw-bold">No Handphone</label>
                            <div class="col-9">
                                <input type="text" name="handphone" class="form-control" required>
                                <small class="text-secondary">Contoh : +6288888888888</small>
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                            <label class="col-3 fw-bold">Alamat</label>
                            <div class="col-9">
                                <textarea name="alamat" required class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                            <label class="col-3 fw-bold">Total Harga</label>
                            <div class="col-4">
                                <input type="hidden" name="harga_diskon" value="<?php echo $paket['harga_diskon'] ?>">
                                <input type="text" class="form-control" readonly value="Rp. <?php if ($paket['harga_diskon'] >= 1000 && $paket['harga_diskon'] < 10000) {
                                                                                                echo $paket['harga_diskon'];
                                                                                            } else if ($paket['harga_diskon'] >= 10000 && $paket['harga_diskon'] < 100000) {
                                                                                                echo substr($paket['harga_diskon'], 0, 2) . ".000";
                                                                                            } else if ($paket['harga_diskon'] >= 100000 && $paket['harga_diskon'] < 1000000) {
                                                                                                echo substr($paket['harga_diskon'], 0, 3) . ".000";
                                                                                            } else if ($paket['harga_diskon'] >= 1000000 && $paket['harga_diskon'] < 10000000) {
                                                                                                $awal = substr($paket['harga_diskon'], 0, 1) . ".";
                                                                                                $tengah = substr($paket['harga_diskon'], 1, 3) . ".";
                                                                                                $akhir = substr($paket['harga_diskon'], 4, 3);
                                                                                                echo $awal . $tengah . $akhir;
                                                                                            } ?>">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center" style="padding-top: 50px;">
                            <button type="submit" class="btn text-white order" style="background-color: #3fbbc0;border-radius: 30px;height: 50px;width: 200px;font-size: 20px;"><i class="fas fa-shopping-cart"></i> <strong>Order</strong></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->