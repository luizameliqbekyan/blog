<?php
session_start();

$conn = new mysqli("localhost", "root", "", "shop_db");
if($conn->connect_error){
    die("Connection error");
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
if($username === '' || $password === ''){
    $_SESSION['error'] = "All rows need to bo filled";
    header("Location: login.php");
    exit();
}

$hashedPassword = hash('sha256', $password);

$sql = "SELECT * FROM user 
        WHERE username='$username' AND passwordd='$hashedPassword'";
$result = $conn->query($sql);

if($result->num_rows === 1){
    $_SESSION['user'] = $username;
    header("Location: indexhome.php");
} else {
    $_SESSION['error'] = "Wrong username or password";
    header("Location: login.php");
    exit();

}
?>