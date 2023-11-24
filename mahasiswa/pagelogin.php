<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
                border: 0px solid black;
                margin-top: 20px;
                margin-left: 30px;
            }

            button{
                margin-left: 30px;
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
                text-align: center;
                color: white;
                border-radius: 5px;
                margin-bottom: 5px;
            }

            input {
                background-color: #f2f2f2;
                color: #333;
                border-radius: 5px;
                height: 20px;
                width: 200px;
            }

            input::placeholder {
                color: #888;
            }

            input:focus {
                border-color: #0077cc;
                outline: none;
            }

            .float{
                float: right;
            }

            .p{
                margin-left: 20px;
                margin-top: 50px;
            }
            
            .p1{
                margin-left: 20px;
            }
            

            .header{
                text-align: center;
                color: white;
                padding: 14px 16px;
            }

            .background{
                background-color: #19376D;
            }

            .putih{
                color: white;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2 class="header">Sistem Informasi Mahasiswa</h2>
            <nav class="background">
                <a href="pagelogin.php">Login</a>
            </nav>
        </nav>
        <h2 class="p">Selamat Datang Di Informasi Mahasiswa</h2>
        <p class="p1">Silahkan Login Dulu</p>
        <form action="login.php" method="post">
            <table>
                <tr>
                    <th><p class="tanda">Username</p></th>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <th><p class="tanda">Password</p></th>
                    <td><input type="text" name="password"></td>
                </tr>
            </table>
            <button type="submit" value="login" class="putih">Login</button>
        </form>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Sistem Informasi Mahasiswa</p>
        </footer>
    </body>
</html>