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

						<a href="<?php echo site_url('admin/dukpns/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/dukpns/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $dukpns->KDuduk?>" />

							<div class="form-group">
								<label for="KAgama">Kode Duduk</label>
								<input class="form-control <?php echo form_error('KDuduk') ? 'is-invalid':'' ?>"
								 type="char" name="KDuduk" placeholder="Masukkan Kode dukpns" value="<?php echo $dukpns->KDuduk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KDuduk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NDuduk">Nama Duduk</label>
								<input class="form-control <?php echo form_error('NDuduk') ? 'is-invalid':'' ?>"
								 type="char" name="NDuduk" placeholder="Masukkan Nama NDuduk" value="<?php echo $dukpns->NDuduk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NDuduk') ?>
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
