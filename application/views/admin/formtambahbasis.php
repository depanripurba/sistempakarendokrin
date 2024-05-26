<div class="content-wrapper">
	<div class="col">
		<div class="card shadow mb-4 p-1">
			<!-- Card Header - Dropdown -->
			<!-- Card Body -->
			<div class="card-body">
				<!-- custom isi -->

				<div class="col-md-9">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Form Tambah Data Pengetahuan</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="POST" action="<?= base_url('posttambahbasis') ?>">
							<div class="card-body">
								<div class="form-group">
									<label for="kodegejala">Nama Penyakit</label>
									<select class="form-control" name="kode_penyakit" id="kodegejala">
										<?php foreach ($penyakit as $pen) : ?>
											<option value="<?= $pen->kode_penyakit ?>"><?= $pen->kode_penyakit ?> : <?= $pen->nama_penyakit ?> </option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<label for="namagejala">Nama Gejala</label>
									<select class="form-control" name="kode_gejala" id="namagejala">
										<?php foreach ($gejala as $gej) : ?>
											<option value="<?= $gej->kode_gejala ?>">
												<?= $gej->kode_gejala ?> : <?= $gej->nama_gejala ?>
											</option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<label for="nilaigejala">Nilai Gejala</label>
									<input type="text" name="nilai" class="form-control" id="nilaigejala">
								</div>

							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Tambahkan</button>
								<a href="<?= base_url('basispengetahuan') ?>" class="btn btn-secondary">Batal/Kembali</a>
							</div>
						</form>
					</div>
				</div>




				<!-- custom isi -->
			</div>
		</div>
	</div>

</div>