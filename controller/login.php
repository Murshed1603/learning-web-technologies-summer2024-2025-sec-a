<?php
session_start();
include "../model/database.php";  // ✅ correct path

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  // simple hashing

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['admin'] = $username;
        header("Location: ../view/dashboard.php");
        exit();
    } else {
        header("Location: ../view/login.php?error=Invalid username or password!");
        exit();
    }
}
?>
