<!DOCTYPE html>
<html lang="en">


<?php
session_start();
require 'connect.php';
if(isset($_POST['login'])){
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $sql = "SELECT id, username, password FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user === false){
        die('Incorrect username / password combination!');
    } else{
        $validPassword = password_verify($passwordAttempt, $user['password']);
        if($validPassword){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            header('Location: home.php');
            exit;

        } else{
            die('Incorrect username / password combination!');
        }
    }

}

?>



<body>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>Login</title>
        </head>
        <body>
            <h1>Login</h1>
            <form action="login.php" id="login" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password"><br>
                <input type="submit" name="login" value="Login">
            </form>
        </body>
        <a href="index.php">index</a>
    </html>



</body>
