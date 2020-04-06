<?php
$datajson = file_get_contents("https://api.kawalcorona.com/indonesia");
$arrayjson = json_decode($datajson, true);
?>

<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
<!-- Content Utama -->
<div class="content-header">
	<div class="container">
		<h1 class="text-center font-weight-light" style="margin-bottom: 10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 50px;">JAGA PACIRAN</h1>
		<h5 class="text-center font-weight-light" style="margin-bottom: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">Coronavirus Paciran & Indonesia Data</h5>

		<!-- ------------------------------------------- -->

		<div class="row" id="GLOBAL">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card bg-danger img-card box-primary-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">POSITIF</p>
								<h2 class="mb-0 number-font">0</h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?= base_url('vendor/img/eks/sad.png'); ?>" width="60" height="60" alt="Positif"> </div>
						</div>
					</div>
				</div>

			</div><!-- COL END -->
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card bg-success img-card box-secondary-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">SEMBUH</p>
								<h2 class="mb-0 number-font">0</h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?= base_url('vendor/img/eks/happy.png'); ?>" width="70" height="70" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div><!-- COL END -->

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card  bg-secondary img-card box-success-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">MENINGGAL</p>
								<h2 class="mb-0 number-font">0</h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?= base_url('vendor/img/eks/cry.png'); ?>" width="70" height="70" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div><!-- COL END -->

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card  bg-orange img-card box-success-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<h2 class="mb-0 number-font">INDONESIA</h2>

								<p class="text-white mb-0"><b><?= $arrayjson[0]["positif"] ?></b> POSITIF, <b><?= $arrayjson[0]["sembuh"] ?></b> SEMBUH, <b><?= $arrayjson[0]["meninggal"] ?></b> MENINGGAL</p>
							</div>

							<div class="ml-auto"> <img src="<?= base_url('vendor/img/eks/ina.png'); ?>" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col text-center">
				<p>Sumber data : Pusat Kesehatan Masyarakat Paciran &amp; JHU. Update terakhir : </p>
			</div>
		</div>

		<!-- ------------------------------------------- -->

		<div class="card bg-gradient">
			<div class="card-header border-0 ui-sortable-handle">
				<h3 class="card-title font-weight">
					Statistik Kasus Coronavirus di Paciran
				</h3>

				<div class="card-tools">
					<button type="button" class="btn bg-danger btn-sm" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>

				<canvas class="chart chartjs-render-monitor" id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 821px;" width="738" height="224"></canvas>
			</div>
			<!-- <canvas id="myChart" width="400" height="400"></canvas> -->
			<script>
				var ctx = document.getElementById('myChart').getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
						datasets: [{
								// ----------------------- POSIITF -----------------------//
								label: 'POSITIF',
								data: [12, 19, 3, 5, 2, 3],
								backgroundColor: [
									'rgba(212, 128, 128, 0.2)'

								],
								borderColor: [
									'rgb(212, 128, 128)'
								],
								borderWidth: 3
							}, {
								// ------------------------- PDP -------------------------//
								label: 'PDP',
								data: [5, 19, 25, 9, 23, 3],
								backgroundColor: [
									'rgba(245, 243, 95, 0.2)'
								],
								borderColor: [
									'rgb(245, 243, 95)'
								],
								borderWidth: 3
							},
							{
								// ------------------------- ODP -------------------------//
								label: 'ODP',
								data: [5, 22, 18, 23, 0, 1],
								backgroundColor: [
									'rgba(147, 208, 138, 0.2)',


								],
								borderColor: [
									'rgba(105, 217, 88)',
								],
								borderWidth: 3
							}
						]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
			</script>
			<!-- /.card-body -->
			<div class="card-footer">
				<div class="row mt-6">
					<div class="col text-center bg-red">
						<h5 class="font-weight-normal mt-2">POSITIF <br> <small style="font-size: 10px">Orang Positif Virus</small></h5>
						<h3 class="text-xxl mb-1 social-content number-font"> 1,285</h3>
						<p class="text-white"></span>ORANG</p>
					</div>
					<div class="col text-center bg-warning">
						<h5 class="font-weight-normal mt-2 text-white">PDP <br> <small style="font-size: 10px; color: white;">Orang Positif Virus</small></h5>
						<h3 class="text-xxl mb-1 social-content number-font text-white"> 1,285</h3>
						<p class="text-white"></span>ORANG</p>
					</div>
					<div class="col text-center bg-green">
						<h5 class="font-weight-normal mt-2">ODP <br> <small style="font-size: 10px">Orang Dalam Pemantauan</small></h5>
						<h3 class="text-xxl mb-1 social-content danger number-font"> 64</h3>
						<p class="text-white"><span class="text-lg font-weight-700"></span>ORANG</p>
					</div>

					<div class="chart-wrapper">
						<canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden="" height="85" style="display: block; width: 0px; height: 85px;" width="0"></canvas>
					</div>
				</div>
			</div>
			<!-- /.card-footer -->
		</div>

		<!-- ------------------------------------------- -->


		<!-- ------------------------------------------- -->
		<div class="row row-cards">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
				<div class="card">
					<div class="card-header ">
						<h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
						<div class="card-tools">
							<button type="button" class="btn bg-danger btn-sm" data-card-widget="collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
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
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!-- COL END -->
		</div>
		<!-- ------------------------------------------- -->

	</div><!-- /.row -->
</div><!-- /.container-fluid -->
<!-- </div> -->