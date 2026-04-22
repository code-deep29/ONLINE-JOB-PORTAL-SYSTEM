<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$check = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($check->num_rows > 0) {
    echo "Email already exists!";
} else {
    $conn->query("INSERT INTO users (name, email, password)
    VALUES ('$name', '$email', '$password')");

    echo "Registered Successfully!";
}
?>