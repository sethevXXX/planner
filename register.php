<?php

    require_once "connection.php";

    $user_name = mysqli_real_escape_string($db_conn, $_POST["username"]);
    $user_password = mysqli_real_escape_string($db_conn, $_POST["password"]);
    $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

    if (mysqli_query($db_conn, "INSERT INTO users (user_name, user_passwordhash) VALUES ('$user_name', '$user_password_hash')"))
    {
        // echo "The registration was successful";
        header("Location: planner.php");
    } 
    else
    {
        echo "Unexpected error - User already exists or MySQL server error";
    }


?>