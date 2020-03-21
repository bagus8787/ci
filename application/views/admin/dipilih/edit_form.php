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

						<a href="<?php echo site_url('admin/dipilih/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/dipilih/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $dipilih->NIP?>" />

							<div class="form-group">
								<label for="KAgama">NIP</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								 type="char" name="NIP" placeholder="Masukkan NIP" value="<?php echo $dipilih->NIP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Urutan">Urutan</label>
								<input class="form-control <?php echo form_error('Urutan') ? 'is-invalid':'' ?>"
								 type="char" name="Urutan" placeholder="Masukkan Kode Urutan" value="<?php echo $dipilih->Urutan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Urutan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Urutan">Nama Jabatan</label>
								<input class="form-control <?php echo form_error('NJab') ? 'is-invalid':'' ?>"
								 type="char" name="NJab" placeholder="Masukkan Nama Jabatan" value="<?php echo $dipilih->NJab ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NJab') ?>
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
