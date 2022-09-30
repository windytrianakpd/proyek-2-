<?php include('tambah.php'); ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="25%">Nama</th>
			<th class="text-center" width="58%">Slug</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($kategori_download as $kategori_download) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?>.</td>
				<td><?php echo $kategori_download['nama_kategori_download'] ?></td>
				<td><?php echo $kategori_download['slug_kategori_download'] ?></td>
				<td class="text-center">
					<a href="<?php echo base_url('admin/kategori_download/edit/' . $kategori_download['id_kategori_download']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/kategori_download/delete/' . $kategori_download['id_kategori_download']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>