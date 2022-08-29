<?php
require 'koneksi.php';
require 'function_tanggal.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentelella Alela! | </title>

    <link href="assets/template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/template/vendors/nprogress/nprogress.css" rel="stylesheet">

    <link href="assets/template/build/css/custom.min.css" rel="stylesheet">
    <!-- Data tables -->
    <link href="assets/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <div class="" role="main">
                <div class="">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="depan.php" class="btn btn-secondary">SURAT KELUAR</a></h2>
                                    <h2><a href="depan2.php" class="btn btn-primary">SURAT MASUK</a></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <center>
                                        <h3>Daftar Surat Masuk</h3>
                                    </center>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                $no = 1;
                                                $query    = "SELECT * FROM surat_masuk ORDER BY tanggal_terima DESC";
                                                $sql    = mysqli_query($connect, $query);
                                                while ($data = mysqli_fetch_array($sql)) {
                                                ?>
                                                    <td width="1" style="vertical-align: middle;"><?= $no++; ?></td>
                                                    <td style="vertical-align: middle;"><?= $data['no_surat'] ?>,<br><?= IndonesiaTgl($data['tanggal_surat']) ?></td>
                                                    <td style="vertical-align: middle;"><?= $data['isi_ringkas'] ?><br> <b>FILE :</b>
                                                        <a href="upload/surat_masuk/<?= $data['file'] ?>" class="btn btn-default btn-xs fa fa-download">&nbsp;<?= $data['file']; ?></a>
                                                    </td>
                                                    <td style="vertical-align: middle;"><?= $data['asal_surat'] ?>,<br><?= IndonesiaTgl($data['tanggal_terima']) ?></td>

                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/template/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/template/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/template/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="assets/template/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="assets/template/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Data tables -->
    <script src="assets/template/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- morris.js -->
    <script src="assets/template/vendors/raphael/raphael.min.js"></script>
    <script src="assets/template/vendors/morris.js/morris.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/template/build/js/custom.min.js"></script>

    <script>
        $(function() {
            $('#surat_masuk').DataTable()
            $('#surat_keluar').DataTable()
            $('#user').DataTable()
            $('#disposisi').DataTable()
            $('#agd_surat_masuk').DataTable()
            $('#').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
            });
        });
    </script>
</body>

</html>