<?php 
include ("server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="registerContainer">
    <form action="login_register.php" name="registration" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="email" name="email" placeholder="email"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="password" name="password1" placeholder="password"/> 
    </form>
  </div>
</body>
</html>