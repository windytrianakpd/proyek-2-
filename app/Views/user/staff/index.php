<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="9%"></th>
			<th class="text-center" width="40%">Biodata</th>
			<th class="text-center" width="33%">Kontak</th>
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
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>