<p>
	<a href="<?php echo base_url('admin/berita/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%" class="text-center">No</th>
			<th width="9%" class="text-center"></th>
			<th width="45%" class="text-center">Berita</th>
			<th width="25%" class="text-center">Keterangan</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($berita as $berita) { ?>
			<tr>
				<td class="text-center"><small><?php echo $no ?>.</small></td>
				<td>
					<?php if ($berita['gambar'] == "") {
						echo '-';
					} else { ?>
						<img src="<?php echo base_url('assets/upload/image/thumbs/' . $berita['gambar']) ?>" class="img img-thumbnail">
					<?php } ?>
				</td>
				<td>
					<small class="row">
						<div class="col-md-2 pr-0">
							<strong>Judul</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<a href="<?php echo base_url('admin/berita/edit/' . $berita['id_berita']) ?>">
								<?php echo $berita['judul_berita'] ?>
							</a>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Publish</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php
							$tanggal = new DateTime($berita['tanggal_post']);
							echo $tanggal->format('l, j F Y - h:i:s A');
							?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Updated</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php
							$tanggal = new DateTime($berita['tanggal_publish']);
							echo $tanggal->format('l, j F Y - h:i:s A');
							?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Author</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<a href="<?php echo base_url('admin/berita/author/' . $berita['id_user']) ?>">
								<?php echo $berita['nama'] ?>
							</a>
						</div>
					</small>
				</td>
				<td><small class="row">
						<div class="col-md-4 pr-0">
							<strong>Kategori</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<a href="<?php echo base_url('admin/berita/kategori/' . $berita['id_kategori']) ?>">
								<?php echo $berita['nama_kategori'] ?>
							</a>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Jenis</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<a href="<?php echo base_url('admin/berita/jenis_berita/' . $berita['jenis_berita']) ?>">
								<?php echo $berita['jenis_berita'] ?>
							</a>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Status</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<a href="<?php echo base_url('admin/berita/status_berita/' . $berita['status_berita']) ?>">
								<?php echo $berita['status_berita'] ?>
							</a>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Hits</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							( <?php echo $berita['hits'] ?> ) Views
						</div>
						<?php if ($berita['icon']) { ?>
							<div class="col-md-4 pr-0">
								<strong>Icon</strong>
							</div>
							<div class="col-md-1 pr-0 pl-0">
								:
							</div>
							<div class="col-md-7 pl-0 pr-0">
								<?php echo $berita['icon'] ?>
							</div>
						<?php } ?>
					</small>
				</td>
				<td class="text-center">
					<a href="<?php echo base_url('berita/read/' . $berita['slug_berita']) ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i></a>
					<a href="<?php echo base_url('admin/berita/edit/' . $berita['id_berita']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/berita/delete/' . $berita['id_berita']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>