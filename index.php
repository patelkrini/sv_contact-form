<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "contact_db";

$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $msg    = $_POST['msg'];

    $sql = "INSERT INTO users (name, email, phone, message)
            VALUES ('$name', '$email', '$phone', '$msg')";

       $conn = mysqli_connect("localhost", "root", "", "contact_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    
    echo "<h3>User Data:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "msg: $msg <br>";
}

mysqli_close($conn);
?>