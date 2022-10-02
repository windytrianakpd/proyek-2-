<p>
	<a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="47%">Keterangan</th>
			<th class="text-center" width="35%">Akun</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($user as $user) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?>.</td>
				<td>
					<small class="row">
						<div class="col-md-2 pr-0">
							<strong>Nama</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php echo $user['nama'] ?>
						</div>
					</small>
				</td>
				<td>
					<small class="row">
						<div class="col-md-3 pr-0">
							<strong>Username</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $user['username'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Password</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $user['password'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Email</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $user['email'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Level</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $user['akses_level'] ?>
						</div>
					</small>
				</td>
				<td class="text-center">
					<a href="<?php echo base_url('admin/user/edit/' . $user['id_user']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/user/delete/' . $user['id_user']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>