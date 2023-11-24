<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informasi Mahasiswa</title>
        <style type="text/css">
            .tanda { background-color: #cfcfcf;}
            body{
                font-family: Arial, Helvetica, sans-serif;
                padding: 0px;
            }

            table {
                width: 100%;
                border: 1px solid black;
                margin-top: 10px;
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

            td{
                text-align: center;
            }

            footer {
                background-color: #19376D;
                bottom: 0;
                width: 99.9%;
                position: relative;
                height:50px;
                line-height:50px;
                text-align: center;
                border-radius: 5px;
            }
            

            button {
                background-color: #576CBC;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
                margin-top: 20px;
            }

            .float{
                float: right;
            }

            .putih{
                text-decoration: none;
                color: white;
            }

            .header1{
                margin-left: 20px;
                padding: 10px;
            }

            .header{
                text-align: center;
                color: white;
                padding: 14px 16px;
            }

            .background{
                background-color: #19376D;
            }
            
        </style>
    </head>
    <body>
        <nav>
            <h2 class="header">Sistem Informasi Mahasiswa</h2>
            <nav class="background">
                <a href="home.php">Home</a>
                <a href="inputdata.php">Input Data</a>
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
        <h2 class="header1">List Mahasiswa</h2>
        <table border="1" class="center">
            <tr class="tanda" >
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
                <?php
                include 'koneksi.php';
                $login = mysqli_query($koneksi, "SELECT * FROM login");
                foreach ($login as $row) {
                    if ($row['status'] == 'Admin'){
                        echo "<th>ACTION</th>";
                    }
                }
                ?>
            </tr>
            
            <?php
                include 'koneksi.php';
                $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa, login");
                $no = 1;
                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin']=='P'?'perempuan':'Laki-laki';
                    if ($row['status'] == 'Admin') {
                        echo "
                        <tr>
                        <td>$no</td>
                        <td>".$row['nim']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$jenis_kelamin."</td>
                        <td>".$row['jurusan']."</td>
                        <td>".$row['alamat']."</td>
                        <td><a href='from-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
                        <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a></td>
                    </tr>";
                        
                    } else {
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>".$row['nim']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$jenis_kelamin."</td>
                        <td>".$row['jurusan']."</td>
                        <td>".$row['alamat']."</td>
                    </tr>";
                    }
                    $no++;
                }
            ?>
        </table>
        <p></p>
        <button>
            <a class="putih" href="from-input.php">Masukan Data Lainnya</a>
        </button>
        <h2 class="header1">List Wali</h2>
        <table border="1" class="center">
            <tr class="tanda" >
                <th>NO</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>PEKERJAAN</th>
                <th>ALAMAT</th>
                <?php
                include 'koneksi.php';
                $login = mysqli_query($koneksi, "SELECT * FROM login");
                foreach ($login as $row) {
                    if ($row['status'] == 'Admin'){
                        echo "<th>ACTION</th>";
                    }
                }
                ?>
            </tr>
            
            <?php
                include 'koneksi.php';
                $mahasiswa = mysqli_query($koneksi, "SELECT * FROM wali, login");
                $no = 1;
                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin']=='P'?'perempuan':'Laki-laki';
                    if ($row['status'] == 'Admin') {
                        echo "
                        <tr>
                        <td>$no</td>
                        <td>".$row['nama']."</td>
                        <td>".$jenis_kelamin."</td>
                        <td>".$row['pekerjaan']."</td>
                        <td>".$row['alamat']."</td>
                        <td><a href='editwali.php?id=$row[id]'>Edit</a>
                        <a href='deletewali.php?id=$row[id]'>Delete</a></td>
                    </tr>";
                        
                    } else {
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>".$row['nama']."</td>
                        <td>".$jenis_kelamin."</td>
                        <td>".$row['pekerjaan']."</td>
                        <td>".$row['alamat']."</td>
                    </tr>";
                    }
                    $no++;
                }
            ?>
        </table>
        <p></p>
        <button>
            <a class="putih" href="wali.php">Masukan Data Lainnya</a>
        </button>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Reifan Al-fattii Cahyadewa</p>
        </footer>
    </body>
</html>
        