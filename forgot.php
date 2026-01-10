<?php
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {

    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // 1️⃣ Check if email exists
    $check = mysqli_query($con, "SELECT * FROM userss WHERE email='$email'");

    if (!$check || mysqli_num_rows($check) == 0) {
        echo "<script>alert('Email does not exist');</script>";
        exit();
    }

    // 2️⃣ Hash new password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 3️⃣ Update password
    $sql = "UPDATE userss SET password='$hashed_password' WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    // ✅ CORRECT WAY TO CHECK UPDATE
    if ($result && mysqli_affected_rows($con) > 0) {
        echo "<script>alert('Password changed successfully');window.location.href='register.php';</script>";
    } else {
        echo "<script>alert('Password update failed');</script>";
    }
}
?>
