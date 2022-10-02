<form action="<?php echo base_url('admin/user/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>

	<div class="form-group row">
		<label class="col-3">Nama Pengguna</label>
		<div class="col-9">
			<input type="text" name="nama" class="form-control" placeholder="Nama user" value="<?php echo set_value('nama') ?>" required>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Email</label>
		<div class="col-9">
			<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Username</label>
		<div class="col-9">
			<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>" required>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Password</label>
		<div class="col-9">
			<input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Level</label>
		<div class="col-9">
			<select name="akses_level" class="form-control">
				<option value="Admin">Admin</option>
				<option value="User">User</option>
			</select>
		</div>
	</div>

	<div class="d-flex justify-content-center py-2">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
	<?php echo form_close(); ?>