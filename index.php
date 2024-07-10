<?php
session_start();

$users = [
    'user1' => 'password1',
    'user2' => 'password2'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    } else {
        echo "<script>alert('Invalid credentials');</script>";
        echo "<script>window.location.href = 'login.html';</script>";
    }
}
?>


