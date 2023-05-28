<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <?php
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
      echo '<form action="index.php" method="POST" >
      Name <input id="name" name="name" value="Anonimous" />
      <br>
      E-mail: <input id="email" name="email" />
      <br>
      Password <input id="pass" name="pass" type="password" />
      <br> 
      <input type="submit">
    </form>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      if ($name != Null && $email != Null && $pass != Null)
      {
        $password_md5 = md5($_POST['password']);
        $password_sh1 = sha1($_POST['password']);
        echo '<h3>' . date('r') . '</h3>';
        echo "<p>Приветствую, $name, с почтой ($email)! </p>";
        echo '<p>' . "Пароль: ", $pass . '</p>';
        echo '<p>' . "md5: ", $password_md5 . '</p>';
        echo '<p>' . "sh1: ", $password_sh1 . '</p>';
      }
      else
      {
        echo '<p>' . "Поля не были заполнены", $pass . '</p>';
      }
    }
  ?>
  </body>
</html>
