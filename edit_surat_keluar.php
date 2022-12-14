	<?php
	$jns = mysqli_query($connect, "SELECT * FROM surat_jenis");
	$roma = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');

	$id = $_GET['id'];
	$dts = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM surat_keluar WHERE id_keluar = $id "));

	if (isset($_REQUEST['submit'])) {

		$no_surat 		= htmlspecialchars(mysqli_real_escape_string($connect, $_POST['no_surat']));
		$tanggal_kirim	= $_POST['tanggal_kirim'];
		$tujuan 		= htmlspecialchars(mysqli_real_escape_string($connect, $_POST['tujuan']));
		$isi_ringkas	= htmlspecialchars(mysqli_real_escape_string($connect, $_POST['isi_ringkas']));


		$query 		= "UPDATE surat_keluar SET no_surat = '$no_surat', tanggal_kirim = '$tanggal_kirim', tujuan = '$tujuan', isi_ringkas = '$isi_ringkas'  WHERE id_keluar = $id ";
		$sql		= mysqli_query($connect, $query);
		if ($sql) {
			echo '<script>
					window.alert("Data berhasil di simpan");
					window.location.href="./index.php?page=surat_keluar";
				  </script>';
		} else {
			echo '<script>
					window.alert("Data gagal di simpan");
				  </script>';
		}
	}

	?>
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Tambah Surat keluar</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Tambah Surat Keluar</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!--Form tambah surat keluar-->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="no_surat" class="form-control col-md-7 col-xs-12" value="<?= $dts['no_surat']; ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_kirim" class="form-control has-feedback-left" id="tanggal" value="<?= $dts['tanggal_kirim']; ?>">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tujuan" class="form-control col-md-7 col-xs-12" required="required" value="<?= $dts['tujuan']; ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<textarea name="isi_ringkas" class="form-control col-md-7 col-xs-12" required="required"><?= $dts['isi_ringkas']; ?></textarea>
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="reset" class="btn btn-default">Reset</button>
									<input type="submit" class="btn btn-success" value="Simpan" name="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>