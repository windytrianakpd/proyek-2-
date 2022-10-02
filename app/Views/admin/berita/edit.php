<form action="<?php echo base_url('admin/berita/edit/' . $berita['id_berita']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>

	<div class="row">
		<div class="col-lg-9">
			<div class="form-group">
				<label>Isi Berita</label>
				<textarea name="isi" class="form-control konten" style="height: 1088px;"><?php echo $berita['isi'] ?></textarea>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Judul Berita</label>
				<input type="text" name="judul_berita" class="form-control" value="<?php echo $berita['judul_berita'] ?>" required>
			</div>
			<div class="form-group">
				<label>Upload Gambar Berita</label>
				<input type="file" name="gambar" class="form-control" value="<?php echo $berita['gambar'] ?>">
			</div>
			<div class="form-group">
				<label>Kategori, Jenis &amp; Status</label>
				<div>
					<select name="id_kategori" class="form-control">
						<?php foreach ($kategori as $kategori) { ?>
							<option value="<?php echo $kategori['id_kategori'] ?>" <?php if ($berita['id_kategori'] == $kategori['id_kategori']) {
																						echo 'selected';
																					} ?>>
								<?php echo $kategori['nama_kategori'] ?>
							</option>
						<?php } ?>
					</select>
					<small class="text-secondary">Kategori</small>
				</div>
				<div class="pt-2">
					<select name="jenis_berita" class="form-control">
						<option value="Berita">Berita</option>
						<option value="Layanan" <?php if ($berita['jenis_berita'] == "Layanan") {
													echo 'selected';
												} ?>>Layanan</option>
						<option value="Profil" <?php if ($berita['jenis_berita'] == "Profil") {
													echo 'selected';
												} ?>>Profil</option>
					</select>
					<small class="text-secondary">Jenis konten</small>
				</div>
				<div class="pt-2">
					<select name="status_berita" class="form-control">
						<option value="Publish">Publish</option>
						<option value="Draft" <?php if ($berita['status_berita'] == "Draft") {
													echo 'selected';
												} ?>>Draft</option>
					</select>
					<small class="text-secondary">Status publikasi</small>
				</div>
				<div class="pt-2">
					<input type="text" name="icon" class="form-control" value="<?php echo $berita['icon'] ?>">
					<small class="text-secondary">Icon <a href="https://fontawesome.com/v5/search" target="_blank">Fontawsome 5.15.4</a></small>
				</div>
			</div>
			<div class="form-group">
				<label>Tanggal dan jam Publikasi</label>
				<div>
					<input type="text" name="tanggal_publish" class="form-control tanggal" value="<?php if (isset($_POST['tanggal_publis'])) {
																										echo set_value('tanggal_publish');
																									} else {
																										echo tanggal_id($berita['tanggal_publish']);
																									} ?>">
					<small class="text-secondary">Format <strong>dd-mm-yyyy</strong>. Misal: <?php echo date('d-m-Y') ?></small>
				</div>
				<div class="pt-2">
					<input type="text" name="jam" class="form-control jam" value="<?php if (isset($_POST['jam'])) {
																						echo set_value('jam');
																					} else {
																						echo date('H:i:s', strtotime($berita['tanggal_publish']));
																					} ?>">
					<small class="text-secondary">Format <strong>HH:MM:SS</strong>. Misal: <?php echo date('H:i:s') ?></small>
				</div>
			</div>
			<div class="form-group">
				<label>Ringkasan</label>
				<textarea name="ringkasan" rows="5" class="form-control"><?php echo $berita['ringkasan'] ?></textarea>
			</div>
			<div class="form-group">
				<label>Keyword Berita (untuk SEO Google)</label>
				<textarea name="keywords" class="form-control" style="height: 148px;"><?php echo $berita['keywords'] ?></textarea>
			</div>

			<div style="padding-top: 7px;">
				<button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
	</div>








	<?php echo form_close(); ?>