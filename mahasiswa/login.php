<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    if ($username == "Admin") {
        $status = "Admin";
    } else {
        $status = "User";
    }

    $query = "UPDATE login SET username='$username', password='$password', status='$status'";
    mysqli_query($koneksi, $query);
        header("location:index.php");
?>