<?php
  if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo '
<html>
  <head>
    <title>Lab 11</title>
  </head>
  <body>
    <form action="index.php" method="POST" >
      Name <input id="name" name="name" value="Anonimous" />
      <br>
      E-mail: <input id="email" name="email" type="email"/>
      <br>
      Password <input id="pass" name="pass" type="password" />
      <br> 
      <input type="submit">
    </form>
  </body>
</html>';
    }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if ($name != Null && $email != Null && $pass != Null)
    {
      $password_md5 = md5($_POST['password']);
      $password_sh1 = sha1($_POST['password']);
      echo '
<html>
  <head>
    <title>Lab 11</title>
  </head>
  <body>';
      echo '<h3>' . date('r') . '</h3>';
      echo "<p>Приветствую, $name, с почтой ($email)! </p>";
      echo '<p>' . "Пароль: ", $pass . '</p>';
      echo '<p>' . "md5: ", $password_md5 . '</p>';
      echo '<p>' . "sh1: ", $password_sh1 . '</p>
  </body>
</html>';
    }
    else
    {
      echo '<p>' . "Поля не были заполнены", $pass . '</p>';
    }
  }
?>
