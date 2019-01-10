<?php
    // if(isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $pass = $_POST['password'];
        $email = $_POST['email'];

        echo $username;
        // print_r($username)
    // }

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    echo "Connected successfully";
?>