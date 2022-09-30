<p>
	<a href="<?php echo base_url('admin/staff/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="9%"></th>
			<th class="text-center" width="40%">Biodata</th>
			<th class="text-center" width="33%">Kontak</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($staff as $staff) { ?>
			<tr>
				<td class="text-center"><small><?php echo $no ?>.</small></td>
				<td><?php if ($staff['gambar'] == "") {
						echo '-';
					} else { ?>
						<img src="<?php echo base_url('assets/upload/staff/thumbs/' . $staff['gambar']) ?>" class="img img-thumbnail">
					<?php } ?>
				</td>
				<td><small class="row">
						<div class="col-md-3 pr-0">
							<strong>Nama</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $staff['nama'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>jabatan</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $staff['jabatan'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Alamat</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $staff['alamat'] ?>
						</div>
					</small>
				</td>

				<td><small class="row">
						<div class="col-md-4 pr-0">
							<strong>Handphone</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $staff['telepon'] ?>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Email</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $staff['email'] ?>
						</div>
						<div class="col-md-4 pr-0">
							<strong>Alamat</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-7 pl-0 pr-0">
							<?php echo $staff['alamat'] ?>
						</div>
					</small>
				</td>
				<td class="text-center">
					<a href="<?php echo base_url('admin/staff/edit/' . $staff['id_staff']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/staff/delete/' . $staff['id_staff']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>