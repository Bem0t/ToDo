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
  <!-- Форма РЕгистрации -->
  <form action="/vendor/signup.php" method="post">
    <label for="">Логин</label>
    <input type="text" name="login" pattern="[A-Za-z]{5,}" title="5 символов минимум и ввод только латинских букв"  placeholder="Введите логин" required>
    <label for="">Почта</label>
    <input type="email" name = "email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" title="text@text.2-4 символа" placeholder="email" required>
    <label for="">Пароль</label>
    <input type="password" name="password" pattern=".{5,}" title="5 символов минимум" placeholder="Введите пароль" required>
    <label for="">Подтверждение пароля</label>
    <input type="password" name="password_confirm" pattern=".{5,}" title="5 символов минимум" placeholder="Подтвердите пароль" required>
    <button type="submit">Регистрация</button>
    <p>
      У вас уже есть аккаунт? -  <a href="index.php">Войдите</a>
    </p>
    <p class="mail-check"></p>
    <?php
    if($_SESSION['message']){
      echo '<p class="msg">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
    ?>
  </form>
<script src="./assets/js/checkMail.js"></script>
</body>
</html>