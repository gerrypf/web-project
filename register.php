<?php

    session_start();

    include 'config.php';

    if(isset($_POST['register'])) {

        // filter data yang diinputkan
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // menyiapkan query
        $sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn,$sql);

        if($result) {
            header("Location:login.php");
        } else {
            header("Location:register.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" href="css/register.css" />
    </head>
    <body class="bg-light">
        <h2>Ayo daftar sekarang</h2>
        <p>Sudah punya akun? <a href="login.php" class="login">Masuk di sini</a></p>

        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" 
                    placeholder="Username" required/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" 
                    placeholder="Alamat Email" required/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" 
                    placeholder="Password" onkeyup="check();" required/>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input class="form-control" type="password" name="confirm_password" 
                    placeholder="Confirm Password" onkeyup="check();" required/>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="register">Daftar</button>
        </form>

        <script type="text/javascript">
            var check=function() {
                if(document.getElementById('password').value == 
                document.getElementById('confirm_password').value) {
                    document.getELementById('message').style.color='green';
                    document.getELementById('message').innerHTML='Password Cocok';
                } else {
                    document.getELementById('message').style.color='red';
                    document.getELementById('message').innerHTML='Password Tidak Cocok';
                }
            }
        </script>
    </body>
</html>