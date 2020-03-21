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

						<a href="<?php echo site_url('admin/acpns/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("admin/acpns/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $acpns->NIP?>" />

							<div class="form-group">
								<label for="NIP">NIP</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								 type="text" name="NIP" placeholder="Masukkan Kode acpns" value="<?php echo $acpns->NIP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">NtBAKN</label>
								<input class="form-control <?php echo form_error('NtBAKN') ? 'is-invalid':'' ?>"
								 type="text" name="NtBAKN" placeholder="Masukkan Nama acpns" value="<?php echo $acpns->NtBAKN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NtBAKN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">TNtBAKN</label>
								<input class="form-control <?php echo form_error('TNtBAKN') ? 'is-invalid':'' ?>"
								 type="text" name="TNtBAKN" placeholder="Masukkan Nama acpns" value="<?php echo $acpns->TNtBAKN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TNtBAKN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">Kode Pejabat</label>
								<input class="form-control <?php echo form_error('KPej') ? 'is-invalid':'' ?>"
								 type="text" name="KPej" placeholder="Masukkan KPej" value="<?php echo $acpns->KPej ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KPej') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">SKCPNS</label>
								<input class="form-control <?php echo form_error('SKCPNS') ? 'is-invalid':'' ?>"
								 type="text" name="SKCPNS" placeholder="Masukkan SKCPNS" value="<?php echo $acpns->SKCPNS ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('SKCPNS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">TSKCPNS</label>
								<input class="form-control <?php echo form_error('TSKCPNS') ? 'is-invalid':'' ?>"
								 type="text" name="TSKCPNS" placeholder="Masukkan TSKCPNS" value="<?php echo $acpns->TSKCPNS ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TSKCPNS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">TMTCPNS</label>
								<input class="form-control <?php echo form_error('TMTCPNS') ? 'is-invalid':'' ?>"
								 type="text" name="TMTCPNS" placeholder="Masukkan TMTCPNS" value="<?php echo $acpns->TMTCPNS ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TMTCPNS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">KGolRu</label>
								<input class="form-control <?php echo form_error('KGolRu') ? 'is-invalid':'' ?>"
								 type="text" name="KGolRu" placeholder="Masukkan KGolRu" value="<?php echo $acpns->KGolRu ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KGolRu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">NSTTPP</label>
								<input class="form-control <?php echo form_error('NSTTPP') ? 'is-invalid':'' ?>"
								 type="text" name="NSTTPP" placeholder="Masukkan NSTTPP" value="<?php echo $acpns->NSTTPP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NSTTPP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">TSTTPP</label>
								<input class="form-control <?php echo form_error('TSTTPP') ? 'is-invalid':'' ?>"
								 type="text" name="TSTTPP" placeholder="Masukkan TSTTPP" value="<?php echo $acpns->TSTTPP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TSTTPP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">TMTLGas</label>
								<input class="form-control <?php echo form_error('TMTLGas') ? 'is-invalid':'' ?>"
								 type="text" name="TMTLGas" placeholder="Masukkan TMTLGas" value="<?php echo $acpns->TMTLGas ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TMTLGas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAgama">STMT</label>
								<input class="form-control <?php echo form_error('STMT') ? 'is-invalid':'' ?>"
								 type="text" name="STMT" placeholder="Masukkan STMT" value="<?php echo $acpns->STMT ?>" />
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
