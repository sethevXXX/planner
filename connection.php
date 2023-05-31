<?php

    $db_host = "localhost";
    $db_name = "planner";
    $db_user = "root";
    $db_pass = "";

    $db_conn = mysqli_connect($db_host,$db_user,$db_pass) or die ("Failure connection with server $host");
    mysqli_select_db($db_conn, $db_name) or die("Database maintenance is in progress... Refresh the page in a few seconds");
    
?>