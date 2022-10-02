<form action="<?php echo base_url('admin/download/edit/' . $download['id_download']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>
	<div class="row">
		<div class="col-lg-9">
			<div class="form-group">
				<label>Isi Keterangan</label>
				<textarea name="isi" style="height: 365px;" class="form-control konten"><?php echo $download['isi'] ?></textarea>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Judul Download</label>
				<input type="text" name="judul_download" class="form-control" value="<?php echo $download['judul_download'] ?>" required>
			</div>

			<div class="form-group">
				<label>Upload File</label>
				<input type="file" name="gambar" class="form-control" value="<?php echo $download['gambar'] ?>">
			</div>

			<div class="form-group">
				<label>Kategori, Jenis &amp; Status</label>
				<div>
					<select name="id_kategori_download" class="form-control">
						<?php foreach ($kategori_download as $kategori_download) { ?>
							<option value="<?php echo $kategori_download['id_kategori_download'] ?>" <?php if ($download['id_kategori_download'] == $kategori_download['id_kategori_download']) {
																											echo 'selected';
																										} ?>>
								<?php echo $kategori_download['nama_kategori_download'] ?>
							</option>
						<?php } ?>
					</select>
					<small class="text-secondary">Kategori</small>
				</div>
				<div class="pt-2">
					<select name="jenis_download" class="form-control">
						<option value="Download">Download</option>
						<option value="Panduan" <?php if ($download['jenis_download'] == "Panduan") {
													echo 'selected';
												} ?>>Panduan</option>
					</select>
					<small class="text-secondary">Jenis konten</small>
				</div>
			</div>

			<div style="padding-top: 7px;">
				<button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
	</div>

	<?php echo form_close(); ?>