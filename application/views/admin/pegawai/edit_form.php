<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/pegawai/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/pegawai/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $pegawai->Nama?>" />

							<div class="form-group">
								<label for="KAgama">NIP</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								 type="char" name="NIP" placeholder="Masukkan NIP" value="<?php echo $pegawai->NIP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Nama</label>
								<input class="form-control <?php echo form_error('Nama') ? 'is-invalid':'' ?>"
								 type="char" name="Nama" placeholder="Masukkan Nama" value="<?php echo $pegawai->Nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Gelar Depan</label>
								<input class="form-control <?php echo form_error('GlDepan') ? 'is-invalid':'' ?>"
								 type="char" name="GlDepan" placeholder="Masukkan Gelar Depan" value="<?php echo $pegawai->GlDepan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('GlDepan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Gelar Belakang</label>
								<input class="form-control <?php echo form_error('GlBlk') ? 'is-invalid':'' ?>"
								 type="char" name="GlBlk" placeholder="Masukkan Gelar Belakang" value="<?php echo $pegawai->GlBlk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('GlBlk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kota Lahir</label>
								<input class="form-control <?php echo form_error('KTLahir') ? 'is-invalid':'' ?>"
								 type="char" name="KTLahir" placeholder="Masukkan NIP" value="<?php echo $pegawai->KTLahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KTLahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('TLahir') ? 'is-invalid':'' ?>"
								 type="date" name="TLahir" placeholder="Masukkan NIP" value="<?php echo $pegawai->TLahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TLahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Jenis Kelamin</label>
								<input class="form-control <?php echo form_error('KJKel') ? 'is-invalid':'' ?>"
								 type="char" name="KJKel" placeholder="Masukkan NIP" value="<?php echo $pegawai->KJKel ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KJKel') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Agama </label>
								<input class="form-control <?php echo form_error('KAgama') ? 'is-invalid':'' ?>"
								 type="char" name="KAgama" placeholder="Masukkan KAgama " value="<?php echo $pegawai->KAgama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KAgama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Status </label>
								<input class="form-control <?php echo form_error('KStatus') ? 'is-invalid':'' ?>"
								 type="char" name="KStatus" placeholder="Masukkan Kode Status " value="<?php echo $pegawai->KStatus  ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KStatus') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Jenis Pegawai</label>
								<input class="form-control <?php echo form_error('KJPeg') ? 'is-invalid':'' ?>"
								 type="char" name="KJPeg" placeholder="Masukkan NIP" value="<?php echo $pegawai->KJPeg ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KJPeg') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Duduk</label>
								<input class="form-control <?php echo form_error('KDuduk') ? 'is-invalid':'' ?>"
								 type="char" name="KDuduk" placeholder="Masukkan Kode Duduk " value="<?php echo $pegawai->KDuduk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KDuduk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Status Kawin </label>
								<input class="form-control <?php echo form_error('KSKawin') ? 'is-invalid':'' ?>"
								 type="char" name="KSKawin" placeholder="Masukkan KSKawin " value="<?php echo $pegawai->KSKawin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KSKawin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Suku </label>
								<input class="form-control <?php echo form_error('Suku') ? 'is-invalid':'' ?>"
								 type="char" name="Suku" placeholder="Masukkan Suku " value="<?php echo $pegawai->Suku ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Suku') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Gol Darah </label>
								<input class="form-control <?php echo form_error('KGolDar') ? 'is-invalid':'' ?>"
								 type="char" name="KGolDar" placeholder="Masukkan Golongan Darah" value="<?php echo $pegawai->KGolDar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KGolDar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat Jalan </label>
								<input class="form-control <?php echo form_error('AlJalan') ? 'is-invalid':'' ?>"
								 type="char" name="AlJalan" placeholder="Masukkan AlJalan " value="<?php echo $pegawai->AlJalan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlJalan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat RT</label>
								<input class="form-control <?php echo form_error('AlRT') ? 'is-invalid':'' ?>"
								 type="char" name="AlRT" placeholder="Masukkan AlRT" value="<?php echo $pegawai->AlRT ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlRT') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat RW </label>
								<input class="form-control <?php echo form_error('AlRW') ? 'is-invalid':'' ?>"
								 type="char" name="AlRW" placeholder="Masukkan AlRW" value="<?php echo $pegawai->AlRW ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlRW') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat Telp </label>
								<input class="form-control <?php echo form_error('AlTelp') ? 'is-invalid':'' ?>"
								 type="char" name="AlTelp" placeholder="Masukkan AlTelp" value="<?php echo $pegawai->AlTelp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlTelp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat Kode Provinsi </label>
								<input class="form-control <?php echo form_error('AlKoProp') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoProp" placeholder="Masukkan AlKoProp " value="<?php echo $pegawai->AlKoProp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoProp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat Kode Kabupaten </label>
								<input class="form-control <?php echo form_error('AlKoKab') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoKab" placeholder="Masukkan AlKoKab" value="<?php echo $pegawai->AlKoKab ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoKab') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat Kode Kecamatan </label>
								<input class="form-control <?php echo form_error('AlKoKec') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoKec" placeholder="Masukkan AlKoKec" value="<?php echo $pegawai->AlKoKec ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoKec') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Alamat Kode Desa </label>
								<input class="form-control <?php echo form_error('AlKoDes') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoDes" placeholder="Masukkan AlKoDes" value="<?php echo $pegawai->AlKoDes ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoDes') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Pos </label>
								<input class="form-control <?php echo form_error('KPos') ? 'is-invalid':'' ?>"
								 type="char" name="KPos" placeholder="Masukkan KPos " value="<?php echo $pegawai->KPos ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KPos') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Kode Anggota Partai Politik </label>
								<input class="form-control <?php echo form_error('KAParpol') ? 'is-invalid':'' ?>"
								 type="char" name="KAParpol" placeholder="Masukkan KAParpol " value="<?php echo $pegawai->KAParpol ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KAParpol') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">NPAP_G </label>
								<input class="form-control <?php echo form_error('NPAP_G') ? 'is-invalid':'' ?>"
								 type="char" name="NPAP_G" placeholder="Masukkan NPAP_G" value="<?php echo $pegawai->NPAP_G ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NPAP_G') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Nomor Kartu Pegawai </label>
								<input class="form-control <?php echo form_error('NKarpeg') ? 'is-invalid':'' ?>"
								 type="char" name="NKarpeg" placeholder="Masukkan NKarpeg" value="<?php echo $pegawai->NKarpeg ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NKarpeg') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Nomor Asuransi Kesehatan </label>
								<input class="form-control <?php echo form_error('NAskes') ? 'is-invalid':'' ?>"
								 type="char" name="NAskes" placeholder="Masukkan NAskes" value="<?php echo $pegawai->NAskes ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAskes') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Nomor Tabungan Pensiun </label>
								<input class="form-control <?php echo form_error('NTaspen') ? 'is-invalid':'' ?>"
								 type="char" name="NTaspen" placeholder="Masukkan NTaspen" value="<?php echo $pegawai->NTaspen  ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NTaspen') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">NKaris_su </label>
								<input class="form-control <?php echo form_error('NKaris_su') ? 'is-invalid':'' ?>"
								 type="char" name="NKaris_su" placeholder="Masukkan NKaris_su" value="<?php echo $pegawai->NKaris_su  ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NKaris_su') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">NPWP </label>
								<input class="form-control <?php echo form_error('NPWP') ? 'is-invalid':'' ?>"
								 type="char" name="NPWP" placeholder="Masukkan NPWP " value="<?php echo $pegawai->NPWP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NPWP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Nopen </label>
								<input class="form-control <?php echo form_error('Nopen') ? 'is-invalid':'' ?>"
								 type="char" name="Nopen" placeholder="Masukkan Nopen" value="<?php echo $pegawai->Nopen ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Nopen') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">File_Bmp </label>
								<input class="form-control <?php echo form_error('File_Bmp') ? 'is-invalid':'' ?>"
								 type="char" name="File_Bmp" placeholder="Masukkan File_Bmp" value="<?php echo $pegawai->File_Bmp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('File_Bmp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Aktif  </label>
								<input class="form-control <?php echo form_error('Aktif') ? 'is-invalid':'' ?>"
								 type="char" name="Aktif" placeholder="Masukkan Aktif" value="<?php echo $pegawai->Aktif ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Aktif') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KAgama">Jenis Jiwa </label>
								<input class="form-control <?php echo form_error('JJiwa') ? 'is-invalid':'' ?>"
								 type="char" name="JJiwa" placeholder="Masukkan JJiwa" value="<?php echo $pegawai->JJiwa ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JJiwa') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
