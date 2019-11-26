<?php
session_start();
$error = '';

if(isset($_POST['submit'])){
  if(empty($_POST['nim']) || empty($_POST['password'])){
    $error = "nim atau password belum di isi!";
  }
  else{
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost","root" ,"" ,"tubes_imk");

    $query = "SELECT nim, password from login where nim=? AND password=? LIMIT 1";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $nim, $password);
    $stmt->execute();
    $stmt->bind_result($nim, $password);
    $stmt->store_result();

    if($stmt->fetch()){
      $_SESSION['login_user'] = $nim;
      header("location: Home.php");
    }
    else{
      $error = "Nim atau Password salah!";
    }
    mysqli_close($conn);
  }
}
?>
