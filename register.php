<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  session_start();

  $conn = mysqli_connect('localhost', 'root', 'tdkdetective');
  @mysqli_select_db($conn, 'test') or die ("Our server is facing problems");

  $name = $_POST['name'];
  $username = $_POST['usern'];
  $password = $_POST['passw'];
  $email = $_POST['email'];
  $date = $_POST['dob'];
  $date = str_replace('/', '-', $date);
  if($_POST['phone'] == "")
    $phone = null;
  else $phone = $_POST['phone'];

  $query = "INSERT INTO USER(name, username, password, email, dateofbirth, phone) VALUES ('$name', '$username', '$password',
                                                                                          '$email', STR_TO_DATE('$date', '%Y-%m-%d'), '$phone')";
  $result = mysqli_query($conn, $query) or die('Error' . mysqli_error($conn));

  $_SESSION['logged'] = true;
  $_SESSION['username'] = $username;
  header("Location: index.php");
?>
</body>
</html>
