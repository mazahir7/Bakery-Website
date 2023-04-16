<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $item = $_POST["product"];
  $phoneno = $_POST["phoneno"];


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bakery";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  $sql = "INSERT INTO orderlist (firstname, lastname, item, phoneno) VALUES ('$fname', '$lname', '$item', '$phoneno')";

  if (mysqli_query($conn, $sql)) {
    header("Location: order.html");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>