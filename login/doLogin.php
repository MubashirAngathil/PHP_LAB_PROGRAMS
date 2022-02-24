<?php

require_once 'session.php';

require_once 'db.php';
if (!$_POST['username'])
    header("Location: login.php");

$username = $_POST['username'];
$pass = $_POST['password'];

$query = 'select * from users where username="' . $username . '";';

$user = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($user);
if ($user) {
    if ($user['password'] == $pass) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
    } else {
        echo "<script>alert('password incorrect');location.replace('./');</script>";
    }
} else {
    echo "<script>alert('user not found');location.replace('./');</script>";
}
