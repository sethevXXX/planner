<?php
    session_start();
    require_once "connect.php";

    $connection = new mysqli($host, $dbUser, $dbPassword, $dbName);
    if($connection -> connect_errno) 
    {  
        die("Failed to connect to MySQL: ".$connection -> connect_errno); 
    }
    
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    $SQL = "SELECT * FROM login WHERE username = '$username' and password = '$password'";  
    if ($result = $connection -> query($SQL))
    {
        // echo $result -> num_rows;
        $row = $result -> fetch_assoc(); 
        // echo $row['username'];

        $result -> free();

        header("Location: planner.php");
    }  
        
    
    

    $connection -> close();
?>