<?php require_once('template/header2/datatables.php'); ?>

<body class="no-skin">
	<?php require_once('template/menu2/menu_header.php'); ?>

	<?php require_once('template/menu2/menu_atas.php'); ?>
	<!-- menu -->
	<?php require_once('template/menu2/menu.php'); ?>
	<!-- end menu -->

	<div class="main-content">
		<div class="main-content-inner">

			<div class="page-content">

				<div class="page-header">
					<h1>
						<b>
							<i class="ace-icon fa fa-bar-chart-o text-primary"></i>
							Data Barang
						</b>
					</h1>
				</div><!-- /.page-header -->

				<?php if ($pesan = $this->session->flashdata('barang_add')) {
				?>

					<div class="alert alert-success" align="center">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<strong><i class="ace-icon fa fa-check"></i>
							Sukses !
						</strong>
						<?php echo $pesan; ?>
					</div>

				<?php

				} elseif ($pesan = $this->session->flashdata('barang_edit')) {
				?>
					<div class="alert alert-success" align="center">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<strong><i class="ace-icon fa fa-check"></i>
							Sukses !
						</strong>
						<?php echo $pesan; ?>
					</div>
				<?php
				} elseif ($pesan = $this->session->flashdata('barang_delete')) {
				?>
					<div class="alert alert-success" align="center">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<strong><i class="ace-icon fa fa-check"></i>
							Sukses !
						</strong>
						<?php echo $pesan; ?>
					</div>
				<?php
				}
				?>

				<a href="javascript:void(0);" id="tambah_barang" role="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</a>

				<div class="pull-right" style="margin-top: 5px;">
					<span style="font-size: 18px;">
						<b> Total Barang : <?php echo $sum_jumlah->total_jumlah_barang; ?> Pcs </b>
					</span>
					&nbsp;
					<span style="font-size: 18px;"> | </span>
					&nbsp;
					<span style="font-size: 18px;">
						<b> Total Harga : <?php echo "Rp. " . str_replace(',', '.', number_format($sum_harga->total_harga)); ?>
						</b>
					</span>
				</div>
				<!-- PAGE CONTENT BEGINS -->
				<div class="row" style="margin-top: 10px;">
					<div class="col-xs-12">

						<table id="datatable" class="table table-bordered table-striped table-hover nowrap responsive">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Barang</th>
									<th>Nama barang</th>
									<th>Jumlah barang</th>
									<th>Harga Satuan</th>
									<th>Jumlah * Harga</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$no = 1;
								foreach ($data as $row) : ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo strtoupper($row->kd_barang); ?></td>
										<td><?php echo ucwords($row->nama_barang); ?></td>
										<td><?php echo ucwords($row->jumlah_barang); ?></td>
										<td><?php echo "Rp. " . str_replace(',', '.', number_format($row->harga_satuan)); ?></td>
										<td><?php echo "Rp. " . str_replace(',', '.', number_format($row->total_jumlah)); ?></td>
										<td>
											<a class="badge badge-primary py-2 px-3" data-toggle="tooltip" title="Edit Barang" href="<?php echo base_url("barang/Edit_barang/" . $row->kd_barang) ?>"><span class="glyphicon glyphicon-edit"></span>
											</a>
											<a onclick="return confirm ('Yakin Data <?php echo $row->nama_barang ?> Ingin Di Hapus.?');" class="badge badge-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Barang" href="<?php echo base_url('barang/delete_barang/' . $row->kd_barang); ?>"><span class="glyphicon glyphicon-trash"></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div><!-- /.span -->
				</div><!-- /.row -->

				<div class="hr hr-18 dotted hr-double"></div>
				<?php $this->load->view('barang/input_barang'); ?>
				<!-- PAGE CONTENT ENDS -->

			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

	<?php require_once('template/footer2/footer.php'); ?>

	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>vendor/js2/datatables/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>vendor/js2/datatables/js/dataTables.bootstrap.js"></script>
	</div><!-- /.main-container -->

	<script type="text/javascript">
		$(document).ready(function() {
			$('#ModalGue').on('hide.bs.modal', function() {
				setTimeout(function() {
					$('#ModalHeader, #ModalContent, #ModalFooter').html('');
				}, 500);
			});

			$('#datatable').DataTable();

			$(".delbutton").click(function() {
				var element = $(this);
				var del_id = element.attr("id");
				var info = 'kd_barang=' + del_id;
				if (confirm("Anda yakin akan menghapus?")) {
					var url = "<?php echo base_url('barang/delete_barang/') ?>";
					$.ajax({
						type: "POST",
						url: url,
						data: info,
						success: function() {}
					});

					$(this).parents(".record").animate({
						opacity: "hide"
					}, "slow");
				}

				return false;
			});

			$(document).on('click', '#tambah_barang', function() {
				$('.modal-dialog').removeClass('modal-sm');
				$('.modal-dialog').removeClass('modal-lg');
				$('#ModalHeader').html('Tambah Barang');
				$('#ModalContent').load($(this).attr('href'));
				$('#ModalGue').modal('show');
			});
		});

		// $(selector).click(function (e) { 
		// 	e.preventDefault();

		// });
	</script>
</body>

</html>