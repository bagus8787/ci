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

						<a href="<?php echo site_url('admin/eselon/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/eselon/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $eselon->KEselon?>" />

							<div class="form-group">
								<label for="KAgama">Kode eselon</label>
								<input class="form-control <?php echo form_error('KEselon') ? 'is-invalid':'' ?>"
								 type="char" name="KEselon" placeholder="Masukkan Kode eselon" value="<?php echo $eselon->KEselon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KEselon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NEselon">Nama eselon</label>
								<input class="form-control <?php echo form_error('NEselon') ? 'is-invalid':'' ?>"
								 type="char" name="NEselon" placeholder="Masukkan Nama NEselon" value="<?php echo $eselon->NEselon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NEselon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NEselon">Tunjangan</label>
								<input class="form-control <?php echo form_error('Tunjangan') ? 'is-invalid':'' ?>"
								 type="char" name="Tunjangan" placeholder="Masukkan Tunjangan" value="<?php echo $eselon->Tunjangan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Tunjangan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NEselon">Bup</label>
								<input class="form-control <?php echo form_error('Bup') ? 'is-invalid':'' ?>"
								 type="char" name="Bup" placeholder="Masukkan Bup" value="<?php echo $eselon->Bup ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Bup') ?>
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
