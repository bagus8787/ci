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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pegawai/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/pegawai/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="kode">NIP</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								 type="char" name="NIP" placeholder="Masukkan NIP" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('Nama') ? 'is-invalid':'' ?>"
								 type="char" name="Nama" min="0" placeholder="Masukkan Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('Nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Gelar Depan</label>
								<input class="form-control <?php echo form_error('GlDepan') ? 'is-invalid':'' ?>"
								 type="char" name="GlDepan" min="0" placeholder="Masukkan Gelar Depan" />
								<div class="invalid-feedback">
									<?php echo form_error('GlDepan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Gelar Belakang</label>
								<input class="form-control <?php echo form_error('GlBlk') ? 'is-invalid':'' ?>"
								 type="char" name="GlBlk" min="0" placeholder="Masukkan Gelar Belakang" />
								<div class="invalid-feedback">
									<?php echo form_error('GlBlk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kota Lahir</label>
								<input class="form-control <?php echo form_error('KTLahir') ? 'is-invalid':'' ?>"
								 type="char" name="KTLahir" min="0" placeholder="Masukkan Kota Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('KTLahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('TLahir') ? 'is-invalid':'' ?>"
								 type="date" name="TLahir" min="0" placeholder="Masukkan Tanggal Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('TLahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Jenis Kelamin</label>
								<input class="form-control <?php echo form_error('KJKel') ? 'is-invalid':'' ?>"
								 type="number" name="KJKel" min="1" max="2" placeholder="Masukkan Kode Jenis Kelamin" />
								<div class="invalid-feedback">
									<?php echo form_error('KJKel') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Agama</label>
								<input class="form-control <?php echo form_error('KAgama') ? 'is-invalid':'' ?>"
								 type="number" name="KAgama" min="1" max="7" placeholder="Masukkan Kode Agama" />
								<div class="invalid-feedback">
									<?php echo form_error('KAgama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Status</label>
								<input class="form-control <?php echo form_error('KStatus') ? 'is-invalid':'' ?>"
								 type="number" name="KStatus" min="1" max="9" placeholder="Masukkan Kode Status" />
								<div class="invalid-feedback">
									<?php echo form_error('KStatus') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Jenis Pegawai</label>
								<input class="form-control <?php echo form_error('KJPeg') ? 'is-invalid':'' ?>"
								 type="number" name="KJPeg" min="1" max="9" placeholder="Masukkan Kode Jenis Pegawai" />
								<div class="invalid-feedback">
									<?php echo form_error('KJPeg') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Duduk</label>
								<input class="form-control <?php echo form_error('KDuduk') ? 'is-invalid':'' ?>"
								 type="number" name="KDuduk" min="1" max="9" placeholder="Masukkan Kode Duduk" />
								<div class="invalid-feedback">
									<?php echo form_error('KDuduk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Status Kawin</label>
								<input class="form-control <?php echo form_error('KSKawin') ? 'is-invalid':'' ?>"
								 type="number" name="KSKawin" min="1" max="9" placeholder="Masukkan Kode Status Kawin" />
								<div class="invalid-feedback">
									<?php echo form_error('KSKawin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Suku</label>
								<input class="form-control <?php echo form_error('Suku') ? 'is-invalid':'' ?>"
								 type="char" name="Suku" min="0" placeholder="Masukkan Suku" />
								<div class="invalid-feedback">
									<?php echo form_error('Suku') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Golongan Darah</label>
								<input class="form-control <?php echo form_error('KGolDar') ? 'is-invalid':'' ?>"
								 type="number" name="KGolDar" min="0" max="4" placeholder="Masukkan Kode Golongan Darah" />
								<div class="invalid-feedback">
									<?php echo form_error('KGolDar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat Jalan</label>
								<input class="form-control <?php echo form_error('AlJalan') ? 'is-invalid':'' ?>"
								 type="char" name="AlJalan" min="0" placeholder="Masukkan Alamat Jalan" />
								<div class="invalid-feedback">
									<?php echo form_error('AlJalan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat RT</label>
								<input class="form-control <?php echo form_error('AlRT') ? 'is-invalid':'' ?>"
								 type="char" name="AlRT" min="0" placeholder="Masukkan Alamat RT" />
								<div class="invalid-feedback">
									<?php echo form_error('AlRT') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat RW</label>
								<input class="form-control <?php echo form_error('AlRW') ? 'is-invalid':'' ?>"
								 type="char" name="AlRW" min="0" placeholder="Masukkan Alamat RW" />
								<div class="invalid-feedback">
									<?php echo form_error('AlRW') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat Telepon</label>
								<input class="form-control <?php echo form_error('AlTelp') ? 'is-invalid':'' ?>"
								 type="char" name="AlTelp" min="0" placeholder="Masukkan Alamat Telepon" />
								<div class="invalid-feedback">
									<?php echo form_error('AlTelp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat Kode Propinsi</label>
								<input class="form-control <?php echo form_error('AlKoProp') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoProp" min="0" placeholder="Masukkan Alamat Kode Propinsi" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoProp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat Kode Kabupaten</label>
								<input class="form-control <?php echo form_error('AlKoKab') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoKab" min="0" placeholder="Masukkan Alamat Kode Kabupaten" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoKab') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat Kode Kecamatan</label>
								<input class="form-control <?php echo form_error('AlKoKec') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoKec" min="0" placeholder="Masukkan Alamat Kode Kecamatan" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoKec') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Alamat Kode Desa</label>
								<input class="form-control <?php echo form_error('AlKoDes') ? 'is-invalid':'' ?>"
								 type="char" name="AlKoDes" min="0" placeholder="Masukkan Alamat Kode Desa" />
								<div class="invalid-feedback">
									<?php echo form_error('AlKoDes') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode POS</label>
								<input class="form-control <?php echo form_error('KPos') ? 'is-invalid':'' ?>"
								 type="number" name="KPos" min="1" max="5" placeholder="Masukkan Kode POS" />
								<div class="invalid-feedback">
									<?php echo form_error('KPos') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Kode Anggota Parpol</label>
								<input class="form-control <?php echo form_error('KAParpol') ? 'is-invalid':'' ?>"
								 type="number" name="KAParpol" min="1" max="9" placeholder="Masukkan Kode Anggota Parpol" />
								<div class="invalid-feedback">
									<?php echo form_error('KAParpol') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">NPAP_G</label>
								<input class="form-control <?php echo form_error('NPAP_G') ? 'is-invalid':'' ?>"
								 type="char" name="NPAP_G" min="0" placeholder="Masukkan NPAP_G" />
								<div class="invalid-feedback">
									<?php echo form_error('NPAP_G') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nomor Kartu Pegawai</label>
								<input class="form-control <?php echo form_error('NKarpeg') ? 'is-invalid':'' ?>"
								 type="char" name="NKarpeg" min="0" placeholder="Masukkan Kode Kartu Pegawai" />
								<div class="invalid-feedback">
									<?php echo form_error('NKarpeg') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nomor Asuransi Kesehatan</label>
								<input class="form-control <?php echo form_error('NAskes') ? 'is-invalid':'' ?>"
								 type="char" name="NAskes" min="0" placeholder="Masukkan Nomor Asuransi Kesehatan" />
								<div class="invalid-feedback">
									<?php echo form_error('NAskes') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nomor Tabungan Pensiun</label>
								<input class="form-control <?php echo form_error('NTaspen') ? 'is-invalid':'' ?>"
								 type="char" name="NTaspen" min="0" placeholder="Masukkan Nomor Tabungan Pensiun" />
								<div class="invalid-feedback">
									<?php echo form_error('NTaspen') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nomor Kartu Istri/Suami</label>
								<input class="form-control <?php echo form_error('NKaris_su') ? 'is-invalid':'' ?>"
								 type="char" name="NKaris_su" min="0" placeholder="Masukkan Nomor Kartu Istri/Suami" />
								<div class="invalid-feedback">
									<?php echo form_error('NKaris_su') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">NPWP</label>
								<input class="form-control <?php echo form_error('NPWP') ? 'is-invalid':'' ?>"
								 type="char" name="NPWP" min="0" placeholder="Masukkan NPWP" />
								<div class="invalid-feedback">
									<?php echo form_error('NPWP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nopen</label>
								<input class="form-control <?php echo form_error('Nopen') ? 'is-invalid':'' ?>"
								 type="char" name="Nopen" min="0" placeholder="Masukkan Nopen" />
								<div class="invalid-feedback">
									<?php echo form_error('Nopen') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">File Bmp</label>
								<input class="form-control <?php echo form_error('File_Bmp') ? 'is-invalid':'' ?>"
								 type="char" name="File_Bmp" min="0" placeholder="Masukkan file Bmp" />
								<div class="invalid-feedback">
									<?php echo form_error('File_Bmp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Aktif</label>
								<input class="form-control <?php echo form_error('Aktif') ? 'is-invalid':'' ?>"
								 type="number" name="Aktif" min="1"  max="1" placeholder="Masukkan Kode Aktif" />
								<div class="invalid-feedback">
									<?php echo form_error('Aktif') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Jenis Jiwa</label>
								<input class="form-control <?php echo form_error('JJiwa') ? 'is-invalid':'' ?>"
								 type="number" name="JJiwa" min="1"  max="99" placeholder="Masukkan Kode Jenis Jiwa" />
								<div class="invalid-feedback">
									<?php echo form_error('JJiwa') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
							<a href="<?php echo site_url('admin/pegawai/') ?>">
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
