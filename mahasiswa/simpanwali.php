<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO wali SET nama='$nama', pekerjaan='$pekerjaan', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
    mysqli_query($koneksi, $query);
    header("location:index.php");
?>