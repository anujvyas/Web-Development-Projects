<?php
    session_start();				//function to start the session.

    $db = mysqli_connect("localhost", "root", "", "fitnessblender");

    $name = mysqli_real_escape_string($db, $_POST['fullname']);
    $email =  mysqli_real_escape_string($db, $_POST['email']);
    $mobileno = $_POST['mobno'];
    $gender =  mysqli_real_escape_string($db, $_POST['gender']);
    $username =  mysqli_real_escape_string($db, $_POST['uname']);
    $password =  mysqli_real_escape_string($db, $_POST['pass']);

    $query = "INSERT INTO members (name, email, mobileno, gender, username, password) VALUES ('$name', '$email', '$mobileno', '$gender', '$username', '$password')";
    mysqli_query($db, $query);
    $_SESSION['userid'] = $username;
    header("Location:main.php");
?>