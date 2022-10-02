<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="9%"></th>
			<th class="text-center" width="43%">File</th>
			<th class="text-center" width="25%">Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($download as $download) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?>.</td>
				<td>
					<?php if ($download['gambar'] == "") {
						echo '-';
					} else { ?>
						<a href="<?php echo base_url('admin/download/unduh/' . $download['id_download']) ?>" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Unduh</a>
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
							<?php echo $download['judul_download'] ?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Author</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php echo $download['nama'] ?>
						</div>
					</small>
				</td>
				<td>
					<small class="row">
						<div class="col-md-4 pr-0">
							<strong>Kategori</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $download['nama_kategori_download'] ?>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Jenis</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $download['jenis_download'] ?>
						</div>
					</small>

				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>