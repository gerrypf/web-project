<?php

    session_start();

    include 'config.php';

    if(isset($_POST['login'])) {

        $email = $_POST['email'];
        $userpass = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        header("Location:main.php");
        
    }
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body class="bg-light">
        <h2>Masuk ke SavePuss</h2>
        <p>Belum punya akun? <a href="register.php" class="register">Daftar di sini</a></p>

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" 
                    placeholder="Email" required/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" 
                    placeholder="Password" required/>
            </div>

            <button type="submit" class="btn btn-success btn-block" name="login">Masuk</button>
        </form>
        
    </body>
</html>