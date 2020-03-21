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
						<a href="<?php echo site_url('admin/acpns/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/acpns/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="NIP">NIP</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								 type="number" name="NIP" placeholder="Masukkan NIP" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">NtBAKN</label>
								<input class="form-control <?php echo form_error('NtBAKN') ? 'is-invalid':'' ?>"
								 type="text" name="NtBAKN" min="0" placeholder="Masukkan NtBAKN" />
								<div class="invalid-feedback">
									<?php echo form_error('NtBAKN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">TNtBAKN</label>
								<input class="form-control <?php echo form_error('TNtBAKN') ? 'is-invalid':'' ?>"
								 type="date" name="TNtBAKN" min="0" placeholder="Masukkan TNtBAKN" />
								<div class="invalid-feedback">
									<?php echo form_error('TNtBAKN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">KPej</label>
								<input class="form-control <?php echo form_error('KPej') ? 'is-invalid':'' ?>"
								 type="text" name="KPej" min="0" placeholder="Masukkan KPej" />
								<div class="invalid-feedback">
									<?php echo form_error('KPej') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">SKCPNS</label>
								<input class="form-control <?php echo form_error('SKCPNS') ? 'is-invalid':'' ?>"
								 type="text" name="SKCPNS" min="0" placeholder="Masukkan SKCPNS" />
								<div class="invalid-feedback">
									<?php echo form_error('SKCPNS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">TSKCPNS</label>
								<input class="form-control <?php echo form_error('TSKCPNS') ? 'is-invalid':'' ?>"
								 type="date" name="TSKCPNS" min="0" placeholder="Masukkan TSKCPNS" />
								<div class="invalid-feedback">
									<?php echo form_error('TSKCPNS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">TMTCPNS</label>
								<input class="form-control <?php echo form_error('TMTCPNS') ? 'is-invalid':'' ?>"
								 type="date" name="TMTCPNS" min="0" placeholder="Masukkan TMTCPNS" />
								<div class="invalid-feedback">
									<?php echo form_error('TMTCPNS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">KGolRu</label>
								<input class="form-control <?php echo form_error('KGolRu') ? 'is-invalid':'' ?>"
								 type="text" name="KGolRu" min="0" placeholder="Masukkan KGolRu" />
								<div class="invalid-feedback">
									<?php echo form_error('KGolRu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">NSTTPP</label>
								<input class="form-control <?php echo form_error('NSTTPP') ? 'is-invalid':'' ?>"
								 type="text" name="NSTTPP" min="0" placeholder="Masukkan NSTTPP" />
								<div class="invalid-feedback">
									<?php echo form_error('NSTTPP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">TSTTPP</label>
								<input class="form-control <?php echo form_error('TSTTPP') ? 'is-invalid':'' ?>"
								 type="date" name="TSTTPP" min="0" placeholder="Masukkan TSTTPP" />
								<div class="invalid-feedback">
									<?php echo form_error('TSTTPP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">TMTLGas</label>
								<input class="form-control <?php echo form_error('TMTLGas') ? 'is-invalid':'' ?>"
								 type="date" name="TMTLGas" min="0" placeholder="Masukkan TMTLGas" />
								<div class="invalid-feedback">
									<?php echo form_error('TMTLGas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">STMT</label>
								<input class="form-control <?php echo form_error('STMT') ? 'is-invalid':'' ?>"
								 type="text" name="STMT" min="0" placeholder="Masukkan STMT" />
								<div class="invalid-feedback">
									<?php echo form_error('STMT') ?>
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
