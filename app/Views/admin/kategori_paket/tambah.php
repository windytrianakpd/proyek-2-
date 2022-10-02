<p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
        <i class="fa fa-plus"></i> Tambah Baru
    </button>
</p>
<?php
echo form_open(base_url('admin/kategori_paket'));
echo csrf_field();
?>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-3">Nama Kategori</label>
                    <div class="col-9">
                        <select name="kategori" class="form-control">
                            <?php foreach ($paket_kategori as $paket_kategori) { ?>
                                <option value="<?php echo $paket_kategori['id'] ?>"><?php echo $paket_kategori['kategori'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3">Fasilitas</label>
                    <div class="col-9">
                        <div class="field_wrapper">
                            <div class="field"></div>
                            <div class="row">
                                <div class="col-11 d-flex justify-content-end">
                                    <input id="in" class="in form-control" type="text" placeholder="Fasilitas" name="input_field[]" value="" />
                                </div>
                                <div class="col-1 d-flex justify-content-end">
                                    <a href="javascript:void(0);" class="add_input_button_1" title="Add field"><button class="btn btn-success" type="button">+</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php echo form_close(); ?>