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
						<a href="<?php echo site_url('admin/pegawai/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="table_pegawai" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>NIP Baru</th>
										<th>NIP Lama</th>
										<th>Nama</th>
										<th>Gelar Depan</th>
										<th>Gelar Belakang</th>
										<th>Kota Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Kode Jenis Kelamin</th>
										<th>Kode Agama</th>
										<th>Kode Status</th>
										<th>Kode Jenis Pegawai</th>
										<th>Kode Duduk</th>
										<th>Kode Status Kawin</th>
										<th>Suku</th>
										<th>Kode Golongan Darah</th>
										<th>Alamat Jalan</th>
										<th>Alamat RT</th>
										<th>Alamat RW</th>
										<th>Alamat Telepon</th>
										<th>Alamat Kode Prop</th>
										<th>Alamat Kode Kab</th>
										<th>Alamat Kode Kec</th>
										<th>Alamat Kode Des</th>
										<th>Kode Pos</th>
										<th>Kode Anggota Parpol</th>
										<th>NPAP_G</th>
										<th>Nomor Kartu Pegawai</th>
										<th>Nomor Asuransi Kesehatan</th>
										<th>Nomor Taspen</th>
										<th>NKaris_su</th>
										<th>NPWP</th>
										<th>No Pen</th>
										<th>File_bmp</th>
										<th>Aktif</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>NIP Baru</th>
											<th>NIP Lama</th>
											<th>Nama</th>
											<th>Gelar Depan</th>
											<th>Gelar Belakang</th>
											<th>Kota Lahir</th>
											<th>Tanggal Lahir</th>
											<th>Kode Jenis Kelamin</th>
											<th>Kode Agama</th>
											<th>Kode Status</th>
											<th>Kode Jenis Pegawai</th>
											<th>Kode Duduk</th>
											<th>Kode Status Kawin</th>
											<th>Suku</th>
											<th>Kode Golongan Darah</th>
											<th>Alamat Jalan</th>
											<th>Alamat RT</th>
											<th>Alamat RW</th>
											<th>Alamat Telepon</th>
											<th>Alamat Kode Prop</th>
											<th>Alamat Kode Kab</th>
											<th>Alamat Kode Kec</th>
											<th>Alamat Kode Des</th>
											<th>Kode Pos</th>
											<th>Kode Anggota Parpol</th>
											<th>NPAP_G</th>
											<th>Nomor Kartu Pegawai</th>
											<th>Nomor Asuransi Kesehatan</th>
											<th>Nomor Taspen</th>
											<th>NKaris_su</th>
											<th>NPWP</th>
											<th>No Pen</th>
											<th>File_bmp</th>
											<th>Aktif</th>
											<th>Action</th>
											
										</tr>
									</tfoot>
									
										<!-- <td width="250">
											<a href="<?php echo site_url('admin/pegawai/edit/'.$hasil->NIP) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/pegawai/delete/'.$hasil->NIP) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td> -->
								
									
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

	<script type="text/javascript">

	var table_pegawai;
 
	$(document).ready(function() {
 
    //datatables
    table_pegawai = $('#table_pegawai').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/pegawai/ajax_list')?>",
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
