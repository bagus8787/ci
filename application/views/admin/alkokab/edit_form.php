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

						<a href="<?php echo site_url('admin/alkokab/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/alkokab/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $alkokab->KAlkokab?>" />

							<div class="form-group">
								<label for="KAgama">Kode alkokab</label>
								<input class="form-control <?php echo form_error('KAlkokab') ? 'is-invalid':'' ?>"
								 type="text" name="KAlkokab" placeholder="Masukkan Kode alkokab" value="<?php echo $alkokab->KAlkokab ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KAlkokab') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAlkokab">Nama alkokab</label>
								<input class="form-control <?php echo form_error('NAlkokab') ? 'is-invalid':'' ?>"
								 type="text" name="NAlkokab" placeholder="Masukkan Nama alkokab" value="<?php echo $alkokab->NAlkokab ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAlkokab') ?>
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
