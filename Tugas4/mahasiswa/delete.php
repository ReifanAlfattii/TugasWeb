<?php
    include 'koneksi.php';
    $id_mhs = $_GET['id_mhs'];
    $query = "DELETE from mahasiswa where id_mhs='$id_mhs'";
    mysqli_query($koneksi, $query);
    header("location:index.php");
?>