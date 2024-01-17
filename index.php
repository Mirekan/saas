
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan | SMK Negeri 2 Depok</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        

    <?php 
        if(isset($_GET['pesan']))
        {
            if($_GET['pesan'] == 'gagal')
            {
                echo 'gagal login';
            }
            else
            if($_GET['pesan']=='logout')
            {
                echo 'anda sudah logout';
            }
            if($_GET['pesan']=='login')
            {
                echo 'anda harus login';
            }
        }
    ?>
    <form action="proses-login.php" method="post" class="loginmenu">
        <h2>Aplikasi Perpustakaan</h2>
        <h3>SMK Negeri 2 Depok</h3>
        <table>
            <tr>
                <td class="label">Username</td>
                <td><input type="text" name="nama" placeholder="input username" id=""></td>
            </tr>
            <tr>
                <td class="label">Password</td>
                <td><input type="text" name="password" placeholder="input password" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="LOGIN" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>