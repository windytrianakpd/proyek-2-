<?php
echo form_open(base_url('admin/konfigurasi'));
echo csrf_field();
?>

<h4>Informasi Dasar</h4>
<hr>
<div class="form-group row">
	<label class="col-3">Nama Website</label>
	<div class="col-9">
		<input type="text" name="namaweb" class="form-control" value="<?php echo $konfigurasi['namaweb'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Singkatan Website</label>
	<div class="col-9">
		<input type="text" name="singkatan" class="form-control" value="<?php echo $konfigurasi['singkatan'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Tagline Website</label>
	<div class="col-9">
		<input type="text" name="tagline" class="form-control" value="<?php echo $konfigurasi['tagline'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Alamat Website</label>
	<div class="col-9">
		<input type="text" name="website" class="form-control" value="<?php echo $konfigurasi['website'] ?>">
	</div>
</div>

<h4>Informasi Profil Website/Aplikasi</h4>
<hr>
<div class="row">
	<div class="col-lg-9">
		<div class="form-group">
			<label>Tentang Website</label>
			<textarea name="tentang" class="form-control konten" required rows="20"><?php echo $konfigurasi['tentang'] ?></textarea>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="form-group">
			<label>Deskripsi Ringkas</label>
			<textarea name="deskripsi" required class="form-control" rows="10"><?php echo $konfigurasi['deskripsi'] ?></textarea>
		</div>
	</div>
</div>



<h4>Kontak dan Alamat</h4>
<hr>

<div class="row">
	<div class="col-lg-9">
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" style="height: 690px;" required class="form-control konten"><?php echo $konfigurasi['alamat'] ?></textarea>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="form-group">
			<label>Official Email</label>
			<input type="text" name="email" class="form-control" required value="<?php echo $konfigurasi['email'] ?>">
		</div>

		<div class="form-group">
			<label>Secondary Email</label>
			<input type="text" required name="email_cadangan" class="form-control" value="<?php echo $konfigurasi['email_cadangan'] ?>">
		</div>

		<div class="form-group">
			<label>Whatshap</label>
			<input type="text" name="telepon" required class="form-control" value="<?php echo $konfigurasi['telepon'] ?>">
			<small class="text-secondary">Contoh : 6285111222333
			</small>
		</div>

		<div class="form-group">
			<label>HP</label>
			<input type="text" name="hp" required class="form-control" value="<?php echo $konfigurasi['hp'] ?>">
			<small class="text-secondary">Contoh : +6285111222333
		</div>

		<div class="form-group">
			<label>Google Map</label>
			<textarea name="google_map" rows="10" required class="form-control"><?php echo $konfigurasi['google_map'] ?></textarea>
			<small class="text-secondary">
				<p style="text-align: justify;">Cara pasang alamat maps : Klik <a href="https://www.google.co.id/maps" target="_blank">Google Maps</a> > ketik alamat > share/bagikan > Embed a Map > copy > paste dikolom Google Maps.</p>
			</small>
		</div>
	</div>
</div>

<h4>Jejaring Sosial</h4>
<hr>

<div class="form-group row">
	<label class="col-3">Facebook <i class="fab fa-facebook"></i></label>
	<div class="col-3">
		<input type="text" name="nama_facebook" class="form-control" value="<?php echo $konfigurasi['nama_facebook'] ?>">
		<small class="text-secondary">Nama akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="facebook" class="form-control" value="<?php echo $konfigurasi['facebook'] ?>">
		<small class="text-secondary">Alamat link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Twitter <i class="fab fa-twitter"></i></label>
	<div class="col-3">
		<input type="text" name="nama_twitter" class="form-control" value="<?php echo $konfigurasi['nama_twitter'] ?>">
		<small class="text-secondary">Nama akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="twitter" class="form-control" value="<?php echo $konfigurasi['twitter'] ?>">
		<small class="text-secondary">Alamat link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Instagram <i class="fab fa-instagram"></i></label>
	<div class="col-3">
		<input type="text" name="nama_instagram" class="form-control" value="<?php echo $konfigurasi['nama_instagram'] ?>">
		<small class="text-secondary">Nama akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="instagram" class="form-control" value="<?php echo $konfigurasi['instagram'] ?>">
		<small class="text-secondary">Alamat link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Youtube <i class="fab fa-youtube"></i></label>
	<div class="col-3">
		<input type="text" name="nama_youtube" class="form-control" value="<?php echo $konfigurasi['nama_youtube'] ?>">
		<small class="text-secondary">Nama akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="youtube" class="form-control" value="<?php echo $konfigurasi['youtube'] ?>">
		<small class="text-secondary">Alamat link akun</small>
	</div>
</div>

<div class="d-flex justify-content-center py-2">
	<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
</div>

<?php echo form_close(); ?>