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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/master_pekerjaan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Teknisi</th>
										<th>Nama Teknisi</th>
										<th>Kategori Pekerjaan</th>
										<th>Status</th>
										<th>Keterangan Stock</th>
										<th>Unit</th>
										<th>Kategori Alat</th>
										<th>Keterangan</th>
										<th>Edit/Hapus</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($master_pekerjaan as $teknisi): ?>
									<tr>
										<td width="5">
											<?php echo $teknisi->id_teknisi ?>
										</td>
										<td width="200">
											<?php echo $teknisi->nama_teknisi ?>
										</td>
										<td>
											<?php echo $teknisi->kategori_pekerjaan ?>
										</td>
										<td>
											<?php echo $teknisi->status ?>
										</td>
										<td>
											<?php echo $teknisi->ket_stock ?>
										</td>
										<td>
											<?php echo $teknisi->unit ?>
										</td>
										<td>
											<?php echo $teknisi->kategori_alat ?>
										</td>
										<td>
											<?php echo $teknisi->ket ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/master_pekerjaan/edit/'.$teknisi->id_teknisi) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/master_pekerjaan/delete/'.$teknisi->id_teknisi) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
