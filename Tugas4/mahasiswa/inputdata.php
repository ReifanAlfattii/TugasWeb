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
                position: absolute;
                bottom: 0;
                width: 99%;
                text-align: center;
                color: white;
                border-radius: 5px;
                margin-bottom: 5px;
            }
            

            button {
                background-color: #576CBC;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
                margin-left: 30px;
            }

            .float{
                float: right;
            }

            .putih{
                text-decoration: none;
                color: white;
            }

            .p1{
                margin-left: 30px;
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
        <h2 class="header1">Masukan Data Wali atau Mahasiswa</h2>
        
        <p></p>
        <p class="p1">Silahkan masukan data wali, jika anda belum memasukan data wali</p>
        <button>
            <a class="putih" href="wali.php">Masukan Data Wali</a>
        </button>
        <br></br>
        <p></p>
        <p class="p1">Silahkan masukan data mahasiswa, jika anda belum memasukan data mahasiswa</p>
        <button>
            <a class="putih" href="from-input.php">Masukan Data Mahasiswa</a>
        </button>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Reifan Al-fattii Cahyadewa</p>
        </footer>
    </body>
</html>
        