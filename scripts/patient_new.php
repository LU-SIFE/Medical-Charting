<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $ssn = $_POST['ssn'];

    //create connection
    $host = 'localhost';
    $username = 'catalystuser24';
    $password = 'downloud42';
    $dbname = 'chart_db';
    
    
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO patients (first_name) VALUES (?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn))
    }
    
    mysqli_stmt_bind_param($stmt, "s");

    mysqli_stmt_execute($stmt);

    echo = "New patient added sucessfully";
    

    ?>