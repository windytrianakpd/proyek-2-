<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width=" 9%"></th>
			<th class="text-center" width=" 37%">Biodata</th>
			<th class="text-center" width=" 37%">Kontak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($client as $client) { ?>
			<tr>
				<td class="text-center"><small><?php echo $no ?>.</small></td>
				<td><?php if ($client['gambar'] == "") {
						echo '-';
					} else { ?>
						<img src="<?php echo base_url('assets/upload/client/thumbs/' . $client['gambar']) ?>" class="img img-thumbnail">
					<?php } ?>
				</td>
				<td>
					<small class="row">
						<div class="col-md-3 pr-0">
							<strong>Nama</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $client['nama'] ?>
						</div>
						<?php if ($client['instansi']) { ?>
							<div class="col-md-3 pr-0">
								<strong>Instansi</strong>
							</div>
							<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
								:
							</div>
							<div class="col-md-8 pl-0 pr-0">
								<?php echo $client['instansi'] ?>
							</div>
						<?php } else { ?>
							<div class="col-md-3 pr-0">
								<strong>Instansi</strong>
							</div>
							<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
								:
							</div>
							<div class="col-md-8 pl-0 pr-0">
								masyarakat umum
							</div>
						<?php } ?>
						<div class="col-md-3 pr-0">
							<strong>Testimoni</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $client['isi_testimoni'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Status</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $client['status_client'] ?>
						</div>
					</small>
				</td>
				<td>
					<small class="row">
						<div class="col-md-3 pr-0">
							<strong>Handphone</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $client['telepon'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Email</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $client['email'] ?>
						</div>
						<div class="col-md-3 pr-0">
							<strong>Alamat</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-8 pl-0 pr-0">
							<?php echo $client['alamat'] ?>
						</div>
					</small>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>