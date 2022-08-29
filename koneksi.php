<?php

//koneksi
$connect = mysqli_connect("localhost", "root", "", "ams");
// $conn = mysqli_connect("localhost", "u1492097_smkdwk", "smkdwk2012", "u1492097_rekap");
//cek
if (mysqli_connect_errno()) {
	echo 'Koneksi gagal :' . mysqli_connect_errno();
}
