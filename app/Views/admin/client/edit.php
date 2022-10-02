<form action="<?php echo base_url('admin/client/edit/' . $client['id_client']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>
	<div class="form-group row">
		<label class="col-3">Nama Client</label>
		<div class="col-5">
			<input type="text" name="nama" class="form-control" placeholder="Nama client" value="<?php echo $client['nama'] ?>" required>
		</div>
		<div class="col-4">
			<input type="file" name="gambar" class="form-control" placeholder="gambar" value="<?php echo $client['gambar'] ?>">
			<small class="text-secondary">Foto</small>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Nama Instansi</label>
		<div class="col-9">
			<input type="text" name="instansi" class="form-control" placeholder="Nama Instansi" value="<?php echo $client['instansi'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Status Client, Jenis</label>
		<div class="col-3">
			<select name="jenis_client" class="form-control">
				<option value="Perorangan">Perorangan</option>
				<option value="Perusahaan" <?php if ($client['jenis_client'] == "Perusahaan") {
												echo 'selected';
											} ?>>Perusahaan</option>
				<option value="Organisasi" <?php if ($client['jenis_client'] == "Organisasi") {
												echo 'selected';
											} ?>>Organisasi</option>
			</select>
			<small class="text-secondary">Jenis Client</small>
		</div>
		<div class="col-3">
			<select name="status_client" class="form-control">
				<option value="Publish">Publish</option>
				<option value="Draft" <?php if ($client['status_client'] == "Draft") {
											echo 'selected';
										} ?>>Draft</option>
			</select>
			<small class="text-secondary">Status Client</small>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Email dan Telepon</label>
		<div class="col-5">
			<input type="text" name="email" class="form-control" placeholder="Email client" value="<?php echo $client['email'] ?>">
		</div>
		<div class="col-4">
			<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $client['telepon'] ?>">
			<small class="text-secondary">Contoh : +6288888888888</small>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Alamat</label>
		<div class="col-9">
			<textarea name="alamat" rows="4" placeholder="Alamat" class="form-control"><?php echo $client['alamat'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Testimoni</label>
		<div class="col-9">
			<textarea name="isi_testimoni" rows="4" placeholder="Testimoni" class="form-control"><?php echo $client['isi_testimoni'] ?></textarea>
		</div>
	</div>

	<div class="d-flex justify-content-center py-2">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>


	<?php echo form_close(); ?>