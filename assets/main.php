<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/Main.css">
  <title>Главная</title>

</head>

<body>
  <header>
    <div class="content text">
      <div class="id">
        <?=$_SESSION['user']['id']?>
      </div>
      <div class="login text">
        <?=$_SESSION['user']['Name']?>
      </div>
      <div class="exit text">
        <a href="../index.php">Выход</a>
      </div>
    </div>
  </header>
  <main>
    <div class="content">
      <h1><strong>ToDo list</strong></h1>
      <div class="ToDo-lists">
        <h2>Active</h2>
        <div class="ToDo-lists__active active-box lists">
          <div class="active-box__controls controls">
            <input type="text" class="controls__inp">
            <button class="controls__btn">Добавить</button>
          </div>
          <div class="active-box__list">
            <ul class="todo">
            </ul>
          </div>
        </div>
        <h2>History</h2>
        <div class="ToDo-lists__history history-box lists">
          <div class="history-box__list">
            <ul class="todo-h">
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div id="popup" class="popup">
    <div class="popup__body">
      <div class="popup__content">
        <a href="#" class="popup__close">X</a>
        <div class="popup__title">
          Ого!
        </div>
        <div class="popup__text">
          В вашей задаче была обнаружена ненормативная лексика😢 и нам пришлось ее удалить
        </div>
      </div>
    </div>
  </div>
  <script src="./js/app.min.js"></script>
</body>

</html>