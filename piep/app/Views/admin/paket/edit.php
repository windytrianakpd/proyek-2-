<form action="<?php echo base_url('admin/paket/edit/' . $paket['id']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <?php
    echo csrf_field();
    ?>

    <div class="form-group row">
        <label class="col-3">Kategori</label>
        <div class="col-6">
            <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo $paket['kategori'] ?>">
        </div>
        <div class="col-3">
            <select name="publish" class="form-control">
                <option value="Publish" <?php if ($paket['status_paket'] == "Publish") {
                                            echo 'selected';
                                        } ?>>Publish</option>
                <option value="Draft" <?php if ($paket['status_paket'] == "Draft") {
                                            echo 'selected';
                                        } ?>>Draft</option>
            </select>
            <small class="text-secondary">Publish</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-3">Modul dan Pendaftaran</label>
        <div class="col-3">
            <input type="text" name="modul" class="form-control" placeholder="Modul Pembelajaran" value="<?php echo $paket['modul_pembelajaran'] ?>">
            <small class="text-secondary">Contoh: <strong class="text-danger">100000</strong></small>
        </div>
        <div class="col-3">
            <input type="text" name="pendaftaran" class="form-control" placeholder="Pendaftaran" value="<?php echo $paket['pendaftaran'] ?>">
            <small class="text-secondary">Contoh: <strong class="text-danger">100000</strong></small>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-3">Diskon dan Status</label>
        <div class="col-3">
            <select name="diskon" class="form-control">
                <option value="0%" <?php if ($paket['diskon'] == "0%") {
                                        echo 'selected';
                                    } ?>>0 %</option>
                <option value="5%" <?php if ($paket['diskon'] == "5%") {
                                        echo 'selected';
                                    } ?>>5 %</option>
                <option value="10%" <?php if ($paket['diskon'] == "10%") {
                                        echo 'selected';
                                    } ?>>10 %</option>
                <option value="15%" <?php if ($paket['diskon'] == "15%") {
                                        echo 'selected';
                                    } ?>>15 %</option>
                <option value="20%" <?php if ($paket['diskon'] == "20%") {
                                        echo 'selected';
                                    } ?>>20 %</option>
                <option value="25%" <?php if ($paket['diskon'] == "25%") {
                                        echo 'selected';
                                    } ?>>25 %</option>
                <option value="30%" <?php if ($paket['diskon'] == "30%") {
                                        echo 'selected';
                                    } ?>>30 %</option>
                <option value="35%" <?php if ($paket['diskon'] == "35%") {
                                        echo 'selected';
                                    } ?>>35 %</option>
                <option value="40%" <?php if ($paket['diskon'] == "40%") {
                                        echo 'selected';
                                    } ?>>40 %</option>
                <option value="45%" <?php if ($paket['diskon'] == "45%") {
                                        echo 'selected';
                                    } ?>>45 %</option>
                <option value="50%" <?php if ($paket['diskon'] == "50%") {
                                        echo 'selected';
                                    } ?>>50 %</option>
                <option value="55%" <?php if ($paket['diskon'] == "55%") {
                                        echo 'selected';
                                    } ?>>55 %</option>
                <option value="60%" <?php if ($paket['diskon'] == "60%") {
                                        echo 'selected';
                                    } ?>>60 %</option>
                <option value="65%" <?php if ($paket['diskon'] == "65%") {
                                        echo 'selected';
                                    } ?>>65 %</option>
                <option value="70%" <?php if ($paket['diskon'] == "70%") {
                                        echo 'selected';
                                    } ?>>70 %</option>
                <option value="75%" <?php if ($paket['diskon'] == "75%") {
                                        echo 'selected';
                                    } ?>>75 %</option>
                <option value="80%" <?php if ($paket['diskon'] == "80%") {
                                        echo 'selected';
                                    } ?>>80 %</option>
                <option value="85%" <?php if ($paket['diskon'] == "85%") {
                                        echo 'selected';
                                    } ?>>85 %</option>
                <option value="90%" <?php if ($paket['diskon'] == "90%") {
                                        echo 'selected';
                                    } ?>>90 %</option>
                <option value="95%" <?php if ($paket['diskon'] == "95%") {
                                        echo 'selected';
                                    } ?>>95 %</option>
                <option value="100%" <?php if ($paket['diskon'] == "100%") {
                                            echo 'selected';
                                        } ?>>100 %</option>
            </select>
            <small class="text-secondary">Diskon</small>
        </div>
        <div class="col-3">
            <select name="status" class="form-control">
                <option value="Termurah" <?php if ($paket['status'] == "Termurah") {
                                                echo 'selected';
                                            } ?>>Termurah</option>
                <option value="Diskon" <?php if ($paket['status'] == "Diskon") {
                                            echo 'selected';
                                        } ?>>Diskon</option>
                <option value="Terbaik" <?php if ($paket['status'] == "Terbaik") {
                                            echo 'selected';
                                        } ?>>Terbaik</option>
            </select>
            <small class="text-secondary">Status</small>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-3">Fasilitas</label>
        <div class="col-9">
            <div class="field_wrapper">
                <div class="field">
                    <?php $urut = 0;
                    $cetak = $jumlah_layanan[0]['jumlah'] - 1;
                    for ($i = 0; $i < $cetak; $i++) { ?>
                        <div class="col-11 px-0">
                            <input type="text" class="form-control" name="input_field[]" value="<?php echo $fasilitas[$urut]["fasilitas"] ?>" />
                            <a href="javascript:void(0);" class="remove_input_button" title="Remove field">
                                <button class="btn btn-danger" style="margin-top:-64px;margin-left:669px;" type="button">x</button>
                            </a>
                        </div>
                    <?php $urut++;
                    } ?>
                </div>
                <div class="row">
                    <div class="col-11 d-flex justify-content-end">
                        <input id="in" class="in form-control" type="text" placeholder="Fasilitas" name="input_field[]" value="<?php echo $fasilitas[$jumlah_layanan[0]['jumlah'] - 1]["fasilitas"] ?>" required />
                    </div>
                    <div class="col-1 d-flex justify-content-end">
                        <a href="javascript:void(0);" class="add_input_button" title="Add field"><button class="btn btn-success" type="button">+</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center py-2">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
    </div>
    <?php echo form_close(); ?>