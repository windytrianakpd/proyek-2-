<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="10%">File</th>
			<th class="text-center" width="30%">Judul</th>
			<th class="text-center" width="15%">Kategori</th>
			<th class="text-center" width="15%">Jenis</th>
			<th class="text-center" width="15%">Author</th>
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
				<td><?php echo $download['judul_download'] ?>
				</td>
				<td><?php echo $download['nama_kategori_download'] ?></td>
				<td><?php echo $download['jenis_download'] ?></td>
				<td><?php echo $download['nama'] ?></td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>