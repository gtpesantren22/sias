	<?php
	if (isset($_REQUEST['submit'])) {
		$kode 		= $_POST['kode'];
		$nama		= htmlspecialchars(mysqli_real_escape_string($connect, $_POST['nama']));
		$ket 	= $_POST['ket'];

		$query 		= "INSERT INTO surat_jenis VALUES('', '$kode', '$nama', '$ket')";
		$sql		= mysqli_query($connect, $query);
		if ($sql) {
			echo  '<script language="javascript">
               		  	window.location.href="./index.php?page=jenis";
              		  </script>';
		} else {
			echo  '<script>
						window.alert("Data gagal di simpan");
					  </script>';
		}
	}

	?>

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Tambah kode surat</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Tambah Kode Surat</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!--Form tambah surat masuk -->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Jenis<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="kode" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jenis<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="ket" class="form-control col-md-7 col-xs-12" required="required">
										<option value=""> -pilih- </option>
										<option value="keluar"> Surat Keluar </option>
										<option value="SK"> Surat Keterangan (SK) </option>
									</select>
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