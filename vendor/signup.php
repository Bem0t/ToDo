<?php
  session_start();
  require_once 'connect.php';

  $login =$_POST['login'];
  $password =$_POST['password'];
  $email = $_POST['email'];
  $password_confirm =$_POST['password_confirm'];

  if ($password === $password_confirm){
    $password = md5($password); //Зашифровака пароля
    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `Mail`) VALUES (NULL, '$login', '$password', '$email')");

    $_SESSION['message'] = 'Регистрация прошла успешна';
   header('Location:../index.php');

  }else{
    $_SESSION['message'] = 'Пароли не совпадают';
   header('Location:../register.php');
  }
?>
