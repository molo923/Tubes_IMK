<?php
$conn = mysqli_connect("localhost", "root", "", "tubes_imk");

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT nim from login where nim = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['nim'];
?>
