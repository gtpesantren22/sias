<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Surat Masuk</h3>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Surat Masuk</h2>&nbsp; &nbsp;<a href="index.php?page=tambah_surat_masuk" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Surat Masuk</a>
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
									<center>Nomor Surat,<br> Tanggal Surat</center>
								</th>
								<th>
									<center>Perihal,<br> File</center>
								</th>
								<th style="vertical-align: middle;">
									<center>Asal Surat,<br> Tanggal Terima</center>
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
								$query	= "SELECT * FROM surat_masuk";
								$sql	= mysqli_query($connect, $query);
								while ($data = mysqli_fetch_array($sql)) {
								?>
									<td width="1" style="vertical-align: middle;"><?= $no++; ?></td>
									<td style="vertical-align: middle;"><?= $data['no_surat'] ?>,<br><?= IndonesiaTgl($data['tanggal_surat']) ?></td>
									<td style="vertical-align: middle;"><?= $data['isi_ringkas'] ?><br> <b>FILE :</b>
										<a href="upload/surat_masuk/<?= $data['file'] ?>" class="btn btn-default btn-xs fa fa-download">&nbsp;<?= $data['file']; ?></a>
									</td>
									<td style="vertical-align: middle;"><?= $data['asal_surat'] ?>,<br><?= IndonesiaTgl($data['tanggal_terima']) ?></td>
									<td>
										<center>
											<a href="index.php?page=edit_surat_masuk&id=<?= $data['id_masuk']; ?>" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
											<a onclick="return confirm('Yakin akan dihapus ?')" href="index.php?page=hapus_surat_masuk&id=<?= $data['id_masuk'] ?>" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-o"></i></a>

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