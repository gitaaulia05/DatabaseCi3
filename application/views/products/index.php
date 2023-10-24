<div class="container pt-5 ">
	<a href="<?php echo base_url('ProductController/export') ?>" class="btn btn-success"> <i class="far fa-file-spreadsheet"></i>
		EXPORT EXCEL</a>
</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-12">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card mt-3">
							<div class="card-header">
								<h4 class="text-center"> MAIN TABLE DATABASE
									<!-- <a href="<?= base_url('products/add') ?>" class="btn btn-primary float-right offset-md-6">Tambah Matakuliah</a> -->
								</h4>


							</div>
							<div class="card-body">
								<table class="table table bordered">
									<thead>
										<tr>
											<th>kode matakuliah</th>
											<th> nama matakuliah</th>
											<th> sks</th>
											<th>semester</th>
											<th>Tanggal ambil</th>
											<th>kode dosen</th>
											<th>Sampul</th>
											<th>Update</th>
											<th>Delete</th>
										</tr>
									</thead>

									<tbody>
										<?php foreach ($products as $item) : ?>
											<tr>
												<td><?= $item->kd_mk ?></td>
												<td><?= $item->nama_mk ?></td>
												<td><?= $item->sks ?></td>
												<td><?= $item->semester ?></td>
												<td><?= dateindo($item->Tanggal_ambil) ?></td>
												<td><?= $item->kode_dosen ?></td>
												<td>
													<img src="<?= base_url('images/' . $item->Sampul) ?>" height="100px" width="100px" alt="matkul Image">
												</td>

												<td text-center class="ps-3">
													<a href=" <?php echo base_url('products/edit/' . $item->kd_mk) ?>" class="btn btn-warning btn-sm">
														<i class="fa fa-edit"> </i>
													</a>
												</td>

												<td text-center class="ps-3">
													<a href=" <?php echo base_url('products/delete/' . $item->kd_mk) ?>" class="btn btn-danger btn-sm">
														<i class="fa fa-trash"> </i>
													</a>
												</td>

											</tr>

										<?php endforeach; ?>
									</tbody>
								</table>

							</div>

						</div>
					</div>
				</div>
			</div>
