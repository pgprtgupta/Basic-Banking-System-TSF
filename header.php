<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sparkpg";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Could Not Connect: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>PG TSF BANK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <nav>
    <label class="logo">PG TSF BANK</label>
    <ul>
      <li><a href="main.html">Home</a></li>
      <li><a href="customers.php">Customers</a></li>
      <li><a href="customers.php">Transfer</a></li>
      <li><a href="transaction.php">Transactions</a></li>
    </ul>
  </nav>