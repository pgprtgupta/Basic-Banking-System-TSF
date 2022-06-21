<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "sparkpg";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Could Not Connect: " . mysqli_connect_error());
}

$flag = false;

if (isset($_POST['transfer'])) {
  $sender = $_SESSION['sender'];
  $receiver = $_POST["reciever"];
  $amount = $_POST["amount"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PG TSF BAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <script src="jquery.min.js" type="text/javascript"></script>
    <script src="popper.min.js" type="text/javascript"></script>
    <script src="sweetalert.min.js" type="text/javascript"></script>
</body>

</html>
<?php

$sql = "SELECT Balance FROM users WHERE name='$sender'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($amount > $row["Balance"] or $row["Balance"] - $amount < 100) {
      $location = 'details.php?user=' . $sender;
      header("Location: $location&message=transactionDenied");
    } else {
      $sql = "UPDATE `users` SET Balance=(Balance-$amount) WHERE Name='$sender'";


      if ($conn->query($sql) === TRUE) {
        $flag = true;
      } else {
        echo "Error in updating record: " . $conn->error;
      }
    }
  }
} else {
  echo "0 results";
}

if ($flag == true) {
  $sql = "UPDATE `users` SET Balance=(Balance+$amount) WHERE name='$receiver'";

  if ($conn->query($sql) === TRUE) {
    $flag = true;
  } else {
    echo "Error in updating record: " . $conn->error;
  }
}
if ($flag == true) {
  $sql = "INSERT INTO `transfer`(s_name,r_name,amount) VALUES ('$sender','$receiver','$amount')";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

if ($flag == true) {
  $location = 'details.php?user=' . $sender;
  header("Location: $location&message=success");
}
?>