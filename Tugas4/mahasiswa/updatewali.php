<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "UPDATE wali SET nama='$nama', pekerjaan='$pekerjaan', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>