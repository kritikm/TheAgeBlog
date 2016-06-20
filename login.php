<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php
if(!empty($_POST))
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($username) && empty($password))
    $errors[] = "Don't leave username and password empty";
  else if(empty($username))
    $errors[] = "Don't leave username empty";
  else
    $errors[] = "Don't leave password empty";
}
?>
</body>
</html>
