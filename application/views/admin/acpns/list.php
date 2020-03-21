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
						<a href="<?php echo site_url('admin/acpns/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="table" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>NIP</th>
										<th>NtBAKN</th>
										<th>TNtBAKN</th>
										<th>Kode Pejabat</th>
										<th>SKCPNS</th>
										<th>TSKCPNS</th>
										<th>TMTCPNS</th>
										<th>KGolRu</th>
										<th>NSTTPP</th>
										<th>TSTTPP</th>
										<th>TMTLGas</th>
										<th>STMT</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>NIP</th>
										<th>NtBAKN</th>
										<th>TNtBAKN</th>
										<th>Kode Pejabat</th>
										<th>SKCPNS</th>
										<th>TSKCPNS</th>
										<th>TMTCPNS</th>
										<th>KGolRu</th>
										<th>NSTTPP</th>
										<th>TSTTPP</th>
										<th>TMTLGas</th>
										<th>STMT</th>
										<th>Action</th>
									</tr>
								</tfoot>
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

	<script type="text/javascript">
 
	var _table;
	 
	$(document).ready(function() {
	 
	    //datatables
	    _table = $('#table').DataTable({ 
	 
	        "processing": true, //Feature control the processing indicator.
	        "serverSide": true, //Feature control DataTables' server-side processing mode.
	        "order": [], //Initial no order.
	 
	        // Load data for the table's content from an Ajax source
	        "ajax": {
	            "url": "<?php echo site_url('admin/acpns/ajax_list')?>",
	            "type": "POST"
	        },
	 
	        //Set column definition initialisation properties.
	        "columnDefs": [
	        { 
	            "targets": [ 0 ], //first column / numbering column
	            "orderable": false, //set not orderable
	        },
	        ],
	 
	    });
	 
	});
	</script>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
