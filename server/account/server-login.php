<?php
session_start();
include "../dbConnect.php";
$errors = [];

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $find_id_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $id_query_result = mysqli_query($db, $query);
            $id_query_result = mysqli_fetch_assoc($id_query_result);
            $_SESSION['username'] = $id_query_result['username'];
            $_SESSION['firstname'] = $id_query_result['firstname'];
            $_SESSION['lastname'] = $id_query_result['lastname'];
            $_SESSION['image'] = $id_query_result['avatar'];
            $_SESSION['email'] = $id_query_result['email'];
            
            echo '<script>window.location.href="../closePage.php";</script>';
            //header("../../closePage.php");

    //        header("Location:account/");  
            exit;
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}