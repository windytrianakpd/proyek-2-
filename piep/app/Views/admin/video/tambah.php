<form action="<?php echo base_url('admin/video/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>

	<div class="form-group row">
		<label class="col-3">Nama Video</label>
		<div class="col-9">
			<input type="text" name="judul" class="form-control" placeholder="Nama video" value="<?php echo set_value('judul') ?>" required>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Link Video Youtube</label>
		<div class="col-9">
			<input type="text" name="video" class="form-control" placeholder="Link video" value="<?php echo set_value('video') ?>" required>
			<small class="text-secondary">Contoh: <span class="text-warning">https://www.youtube.com/watch?v=</span><strong class="text-danger">jVr6CYLhjQo</strong>. Ambil kode yang warna <strong class="text-danger">Merah</strong></small>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Keterangan</label>
		<div class="col-9">
			<textarea name="keterangan" rows="4" class="form-control"><?php echo set_value('keterangan') ?></textarea>
		</div>
	</div>

	<div class="d-flex justify-content-center py-2">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>

	<?php echo form_close(); ?>