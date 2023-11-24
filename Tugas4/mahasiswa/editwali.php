<html>
<head>
    <title>Membuat from inputan data</title>
    <style type="text/css">
        .tanda {
            background-color: #cfcfcf;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        nav {
            background-color: #0B2447;
            overflow: hidden;
            border-radius: 5px;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        table {
            width: 90%;
            border: 0px solid black;
            margin-top: 20px;
            margin-left: 30px;
        }

        select {
            background-color: #f2f2f2;
            color: #333;
            border: 2px solid black;
            border-radius: 5px;
        }

        button {
            margin-left: 20px;
            background-color: #576CBC;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            background-color: #19376D;
            position: absolute;
            bottom: 0;
            width: 99%;
            margin-bottom: 5px;
            text-align: center;
            color: white;
            border-radius: 5px;
        }

        .text {
            margin-left: 20px;
        }

        .header {
            text-align: center;
            color: white;
            padding: 14px 16px;
        }

        .background {
            background-color: #19376D;
        }

        .putih {
            text-decoration: none;
            color: white;
        }

        .float{
                float: right;
            }

        .tanda {
            background-color: #ECF2FF;
            border-radius: 5px;
        }

        input {
            background-color: #f2f2f2;
            color: #333;
            border-radius: 5px;
        }

        input::placeholder {
            color: #888;
        }

        input:focus {
            border-color: #0077cc;
            outline: none;
        }
    </style>
</head>

<body>
    <nav>
        <h2 class="header">Sistem Informasi Mahasiswa</h2>
        <nav class="background">
            <a href="home.php">Admin</a>
            <a href="inputdata.php">Mahasiswa</a>
            <a href="index.php">List</a>
            <a class="float">Status : 
            <?php 
                include 'koneksi.php';
                $login = mysqli_query($koneksi, "SELECT * FROM login");
                foreach ($login as $row) {
                    echo"$row[status]";
                }
            ?>
            </a>
        </nav>
    </nav>
    <?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM wali WHERE id='$id'";
$waliQuery = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($waliQuery);
$isLaki = $row['jenis_kelamin'] == 'L';

function active_radio_button($value, $input)
{
    return $value === $input ? 'checked' : '';
}
?>
    <h2 class="text">Edit Data</h2>
    <form method="post" action="updatewali.php">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
        <table>
            <tr>
                <td class="tanda">NAMA</td>
                <td><input type="text" value="<?php echo $row['nama'] ?>" name="nama"></td>
            </tr>
            <tr>
                <td class="tanda">JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value='L' <?php echo active_radio_button('L', $row['jenis_kelamin']) ?>>Laki Laki
                    <input type="radio" name="jenis_kelamin" value='P' <?php echo active_radio_button('P', $row['jenis_kelamin']) ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td class="tanda">PEKERJAAN</td>
                <td>
                    <input type="text" value="<?php echo $row['pekerjaan'] ?>" name="pekerjaan">
                </td>
            </tr>
            <tr>
                <td class="tanda">ALAMAT</td>
                <td>
                    <input type="text" value="<?php echo $row['alamat'] ?>" name="alamat">
                </td>
            </tr>
        </table>
        <button type="submit" class="putih">SIMPAN</button>
        <button><a class="putih" href="index.php">KELUAR</button>
    </form>
</body>

</html>