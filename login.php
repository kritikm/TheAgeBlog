<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  session_start();
  if(!empty($_POST))
  {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect('localhost', 'root', 'tdkdetective');
    @mysqli_select_db($conn, 'test') or die ("Our server is facing probelms");

    $query = "SELECT name FROM USER WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1)
    {
      $_SESSION['logged'] = true;
      $_SESSION['username'] = $username;
      header("Location: index.php");
    }
    else {
      echo "<script>window.alert('Invalid username-password combo');</script>";
    }

  }
?>
</body>
</html>
