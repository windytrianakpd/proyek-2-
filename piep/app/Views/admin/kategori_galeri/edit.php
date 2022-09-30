<?php
echo form_open(base_url('admin/kategori_galeri/edit/' . $kategori_galeri['id_kategori_galeri']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Nama Kategori Galeri</label>
	<div class="col-9">
		<input type="text" name="nama_kategori_galeri" class="form-control" placeholder="Nama kategori_galeri" value="<?php echo $kategori_galeri['nama_kategori_galeri'] ?>" required>
	</div>
</div>

<div class="d-flex justify-content-center py-2">
	<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
</div>
<?php echo form_close(); ?>