<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Form Inputan Data</title>
        <style type="text/css">
            body{
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

            select{
                background-color: #f2f2f2;
                color: #333;
                border: 2px solid black;
                border-radius: 5px;
            }

            button{
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

            .header{
                text-align: center;
                color: white;
                padding: 14px 16px;
            }
            .header1{
                margin-left: 20px;
                padding: 10px;
            }

            .background{
                background-color: #19376D;
            }

            .putih{
                text-decoration: none;
                color: white;
            }

            .tanda{
                background-color: #ECF2FF;
                border-radius: 5px;
            }

            .float{
                float: right;
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
                <a href="home.php">Home</a>
                <a href="from-input.php">Input Data</a>
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
        <h2 class="header1">Tambah Data Wali</h2>
        <form method="post" action="simpanwali.php">
            <table>
                <tr><td class="tanda">NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td class="tanda">JENIS KELAMIN</td><td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td></tr>
                <tr><td class="tanda">PEKERJAAN</td><td><input type="text" name="pekerjaan"></td></tr>
                <tr><td class="tanda">ALAMAT</td><td><input type="text" name="alamat" id=""</td></tr>
            </table>
            <button type="submit" value="simpan" class="putih">SIMPAN</button>
            <button><a class="putih" href="inputdata.php">KELUAR</button>
        </form>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Reifan Al-fattii Cahyadewa</p>
        </footer>
    </body>
</html>