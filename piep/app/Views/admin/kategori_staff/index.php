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
		foreach ($kategori_staff as $kategori_staff) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?>.</td>
				<td><?php echo $kategori_staff['nama_kategori_staff'] ?></td>
				<td><?php echo $kategori_staff['slug_kategori_staff'] ?></td>
				<td class="text-center">
					<a href="<?php echo base_url('admin/kategori_staff/edit/' . $kategori_staff['id_kategori_staff']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/kategori_staff/delete/' . $kategori_staff['id_kategori_staff']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>