<div class="right_col" role="main" style="min-height: 4019px;">
	<div class="">
		<div class="page-title">
			<div class="col-sm-12">
				<div class="main-card mb-3 card">
					<div class="card-body">
						<div class="table-responsive service">
							<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
								<thead>
									<tr>
										<th class="atasbro">NO</th>
										<th class="atasbro">ID</th>
										<th class="atasbro">DESA</th>
										<th class="atasbro">SEMBUH</th>
										<th class="atasbro">POSITIF</th>
										<th class="atasbro">MENINGGAL</th>
										<th class="atasbro">PDP</th>
										<th class="atasbro">ODP</th>
										<?php
										if ($this->session->userdata('level') == '1') {
										?>
											<th class="atasbro">AKSI</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($Welcome as $Welcome) : ?>
										<tr>
											<td><?= $i++ ?></td>
											<td><?php echo $Welcome['id']; ?></td>
											<td><?php echo $Welcome['desa']; ?></td>
											<td><?php echo $Welcome['sembuh']; ?></td>
											<td><?php echo $Welcome['positif']; ?></td>
											<td><?php echo $Welcome['meninggal']; ?></td>
											<td><?php echo $Welcome['pdp']; ?></td>
											<td><?php echo $Welcome['odp']; ?></td>
											<td>
												<a data-toggle="modal" data-target="#modal_form3" class="btn btn-default">Edit <i class="fas fa-arrow-circle-right"></i></a>
											</td>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal_form3" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" id="form3" class="form-horizontal form-label-left">
					<div class="form-group">
						<label class="control-label col-md-10 col-sm-10 col-xs-10">NIM</label>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<input id="hnpm" name="hnpm" type="hidden">
							<input id="nim" name="nim" placeholder="NPM" class="form-control" type="text" value="">
							<span id="npm_error" class="text-danger"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-10 col-sm-10 col-xs-10">NAMA MAHASISWA</label>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<input id="nama" name="nama" placeholder="Nama Mahasiswa" class="form-control" type="text" value="<?php echo set_value('nama'); ?>">
							<span id="nama_error" class="text-danger"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-10 col-sm-10 col-xs-10">EMAIL MAHASISWA</label>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<input id="email" name="email" placeholder="Email Mahasiswa" class="form-control" type="text" value="<?php echo set_value('email'); ?>">
							<span id="nama_error" class="text-danger"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-10 col-sm-10 col-xs-10">NO HP MAHASISWA</label>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<input id="hp" name="hp" placeholder="Nomor Handphone" class="form-control" type="text" value="<?php echo set_value('hp'); ?>">
							<span id="nama_error" class="text-danger"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-10 col-sm-10 col-xs-10">JUDUL SKRIPSI</label>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<input id="judul" name="judul" placeholder="Judul Skripsi" class="form-control" type="text" value="<?php echo set_value('judul'); ?>">
							<span id="nama_error" class="text-danger"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-10 col-sm-10 col-xs-10">Status Penerimaan Judul</label>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<!-- <?php $kode = "id='program_studi' name='program_studi' class='form-control'";
									echo form_dropdown('program_studi', $dd_program_studi, isset($default['dprogram_studi']) ? $default['dprogram_studi'] : '', $kode); ?> -->

							<select name="pembimbing" id="pembimbing" class="form-control">
								<option value="- MENUNGGU -">- MENUNGGU -</option>
								<option value="PAK AMAK">PAK AMAK</option>
								<option value="PAK ZAINI">PAK ZAINI</option>
								<option value="PAK AZIZ">PAK AZIZ</option>
							</select>

							<span id="program_studi_error" class="text-danger"></span>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="margin-left: 5px;margin-bottom: 0px;">Simpan</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>