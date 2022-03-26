<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/Aut.css">
  <title>Авторизация и регистрация</title>
</head>
<body>
  <!-- Форма авторизации -->
  <form action="vendor/signin.php" method="post">
    <label for="">Логин</label>
    <input type="text" name = "login" placeholder="Введите логин">
    <label for="">Пароль</label>
    <input type="password" name = "password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
      У вас нет аккаунта? -  <a href="register.php">Зарегестрируйтесь</a>
    </p>
    <?php
    if($_SESSION['message']){
      echo '<p class="msg">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
    ?>
  </form>

</body>
</html>