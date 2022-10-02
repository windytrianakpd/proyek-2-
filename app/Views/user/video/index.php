<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="25%"></th>
			<th class="text-center" width="58%">Video</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($video as $video) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?>.</td>
				<td>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
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
							<?php echo $video['judul'] ?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Keterangan</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							<?php echo $video['keterangan'] ?>
						</div>
						<div class="col-md-2 pr-0">
							<strong>Link</strong>
						</div>
						<div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
							:
						</div>
						<div class="col-md-9 pl-0 pr-0">
							https://www.youtube.com/watch?v=<?php echo $video['video'] ?>
						</div>
					</small>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>