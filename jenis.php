<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Kode Surat</h3>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Daftar Kode Surat</h2>&nbsp; &nbsp;<a href="index.php?page=tambah_jenis" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Kode Surat</a>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="surat_masuk" class="table table-striped table-bordered table-hover table-sm">
						<thead>
							<tr style="font-size: 13px;">
								<th width="1" style="vertical-align: middle;">No</th>
								<th>
									<center>Kode</center>
								</th>
								<th>
									<center>Nama</center>
								</th>
								<th>
									<center>Keterangan</center>
								</th>
								<th style="vertical-align: middle;">
									<center>Action</center>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								$no = 1;
								$query	= "SELECT * FROM surat_jenis ";
								$sql	= mysqli_query($connect, $query);
								while ($data = mysqli_fetch_array($sql)) {
								?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
									<td style="vertical-align: middle;"><?php echo $data['kode'] ?></td>
									<td style="vertical-align: middle;"><?php echo $data['nama'] ?></td>
									<td style="vertical-align: middle;">Surat <?php echo $data['ket'] ?></td>
									<td>
										<center>
											<form action="" method="post">
												<input type="hidden" name="id_jenis" value="<?= $data['id_jenis']; ?>">
												<button class="btn btn-danger btn-xs" type="submit" name="del" title="Hapus"><i class="fa fa-trash-o"></i></button>
											</form>
										</center>
									</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
if (isset($_POST['del'])) {
	$id = $_POST['id_jenis'];
	$sql = mysqli_query($connect, "DELETE FROM surat_jenis WHERE id_jenis = '$id' ");

	if ($sql) {
		echo  '<script language="javascript">
               		  	window.location.href="./index.php?page=jenis";
              		  </script>';
	}
}
?>