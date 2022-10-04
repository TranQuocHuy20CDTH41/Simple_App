<?php

require_once "includes/db.php";

global $conn;
if (isset($_POST['register'])) {
    $first_name = "";
    $last_name = "";
    $email = "";
    $conf_email = "";
    $password = "";

    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $conf_email = filter_var($_POST['conf_email'], FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (first_name, last_name, email, conf_email, password) VALUES ('$first_name','$last_name','$email', '$conf_email','$password')";

    if ($email != $conf_email) {
        echo "<div class='alert alert-danger' role='alert'>Email did not match</div>";
    }
    $userQuery = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $num_rows = mysqli_num_rows($userQuery);

    if ($num_rows == 1) {
        while ($row = mysqli_fetch_assoc($userQuery)) {
            echo "<div class='alert alert-danger' role='alert'>This email is already in use.</div>";
        }
    } else {
        $run = mysqli_query($conn, $query);
        echo "<div class='alert alert-success' role='alert'>Registration success. Thanks</div>";
    }
}

//Login
if (isset($_POST['login'])) {

    $email = $_POST['lg_email'];
    $password = $_POST['lg_password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $num_rows = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);

    $db_email = $row['email'];
    $db_password = password_verify($password, $row['password']);
    $db_first_name = $row['first_name'];
    $db_last_name = $row['last_name'];

    $_SESSION['email'] = $db_email;
    $_SESSION['first_name'] = $db_first_name;
    $_SESSION['last_name'] = $db_last_name;

    if ($num_rows == 1 && $password == $db_password) {
        header('Location: login/login.php');
    } else {
        echo "<div class='alert alert-danger' role='alert'>Login Failed. Email or password is incorrect. Please try again.</div>";
    }
}
