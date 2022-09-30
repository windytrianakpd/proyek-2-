<form action="<?php echo base_url('admin/paket/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <?php
    echo csrf_field();
    ?>

    <div class="form-group row">
        <label class="col-3">Kategori</label>
        <div class="col-6">
            <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo set_value('kategori') ?>">
        </div>
        <div class="col-3">
            <select name="publish" class="form-control">
                <option value="Publish">Publish</option>
                <option value="Draft">Draft</option>
            </select>
            <small class="text-secondary">Publish</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-3">Modul dan Pendaftaran</label>
        <div class="col-3">
            <input type="text" name="modul" class="form-control" placeholder="Modul Pembelajaran" value="<?php echo set_value('modul') ?>">
            <small class="text-secondary">Contoh: <strong class="text-danger">100000</strong></small>
        </div>
        <div class="col-3">
            <input type="text" name="pendaftaran" class="form-control" placeholder="Pendaftaran" value="<?php echo set_value('pendaftaran') ?>">
            <small class="text-secondary">Contoh: <strong class="text-danger">100000</strong></small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-3">Diskon dan Status</label>
        <div class="col-3">
            <select name="diskon" class="form-control">
                <option value="0%">0 %</option>
                <option value="5%">5 %</option>
                <option value="10%">10 %</option>
                <option value="15%">15 %</option>
                <option value="20%">20 %</option>
                <option value="25%">25 %</option>
                <option value="30%">30 %</option>
                <option value="35%">35 %</option>
                <option value="40%">40 %</option>
                <option value="45%">45 %</option>
                <option value="50%">50 %</option>
                <option value="55%">55 %</option>
                <option value="60%">60 %</option>
                <option value="65%">65 %</option>
                <option value="70%">70 %</option>
                <option value="75%">75 %</option>
                <option value="80%">80 %</option>
                <option value="85%">85 %</option>
                <option value="90%">90 %</option>
                <option value="95%">95 %</option>
                <option value="100%">100 %</option>
            </select>
            <small class="text-secondary">Diskon</small>
        </div>
        <div class="col-3">
            <select name="status" class="form-control">
                <option value="Termurah">Termurah</option>
                <option value="Diskon">Diskon</option>
                <option value="Terbaik">Terbaik</option>
            </select>
            <small class="text-secondary">Status</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-3">Fasilitas</label>
        <div class="col-9">
            <div class="field_wrapper">
                <div class="field"></div>
                <div class="row">
                    <div class="col-11 d-flex justify-content-end">
                        <input id="in" class="in form-control" type="text" placeholder="Fasilitas" name="input_field[]">
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