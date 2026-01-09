<?php
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM userss WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)> 0) {

        $row = mysqli_fetch_assoc($result);

      
        if (password_verify($password, $row['password'])) {

            // ✅ Store key-value pairs in session
            $_SESSION['user_id']    = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            echo "<script>
                alert('Login Successful');
                window.location.href='u.php';
            </script>";
            exit();

        } else {
            echo "<script>
                alert('Invalid Password');
                window.location.href='register.php';
            </script>";
            exit();
        }

    } else {
        echo "<script>
            alert('Email not registered');
            window.location.href='register.php';
        </script>";
        exit();
    }
}
?>
