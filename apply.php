<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$job_id = $_POST['job_id'];

$check = $conn->query("SELECT * FROM applications 
WHERE user_id='$user_id' AND job_id='$job_id'");

if ($check->num_rows > 0) {
    echo "Already applied!";
} else {
    $conn->query("INSERT INTO applications (user_id, job_id) 
    VALUES ('$user_id', '$job_id')");

    echo "Applied Successfully!";
}
?>