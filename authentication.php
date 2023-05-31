<?php

    require_once "connection.php";

    $user_name = mysqli_real_escape_string($db_conn, $_POST["username"]);
    $user_password = mysqli_real_escape_string($db_conn, $_POST["password"]);
    $query_login = mysqli_query($db_conn, "SELECT * FROM users WHERE user_name = '$user_name'");

    if(mysqli_num_rows($query_login) > 0) 
    {
        $record = mysqli_fetch_assoc($query_login);
        $hash = $record["user_passwordhash"];
        if (password_verify($user_password, $hash)) 
        {
            $user_id = $record["user_id"];
            $_SESSION["current_user"] = $user_id;
        }
    }

    if (isset($_SESSION["current_user"]))
    {
        header("Location: planner.php");
        // echo "You are logged in";
    } 
    else 
    {
        echo "You are NOT logged in";
    }

?>