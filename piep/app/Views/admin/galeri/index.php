<p>
	<a href="<?php echo base_url('admin/galeri/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="9%"></th>
			<th class="text-center" width="49%">Banner</th>
			<th class="text-center" width="25%">Keterangan</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($galeri as $galeri) { ?>
			<tr>
				<td class="text-center"><small><?php echo $no ?>.</small></td>
				<td>
					<?php if ($galeri['gambar'] == "") {
						echo '-';
					} else { ?>
						<img src="<?php echo base_url('assets/upload/image/thumbs/' . $galeri['gambar']) ?>" class="img img-thumbnail">
					<?php } ?>
				</td>
				<td>
					<small class="row">
						<div class="col-md-2 pr-0">
							<strong>Judul</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php echo $galeri['judul_galeri'] ?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Author</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php echo $galeri['nama'] ?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Path</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php echo base_url('assets/upload/image/' . $galeri['gambar']) ?>
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
							<?php echo $galeri['nama_kategori_galeri'] ?>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Jenis</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $galeri['jenis_galeri'] ?>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Sliders</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $galeri['status_text'] ?>
						</div>
					</small>
				</td>
				<td class="text-center">

					<a href="<?php echo base_url('admin/galeri/edit/' . $galeri['id_galeri']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/galeri/delete/' . $galeri['id_galeri']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>