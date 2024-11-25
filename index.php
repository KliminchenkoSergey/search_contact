<?php
require_once (__DIR__.'/crest.php');
session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Найди контакт по ID</title>
  <style>
           body {
               background-image: url("fon.jpg"); 
               background-repeat: no-repeat; /* Повторять фон или нет */
               background-size: cover; /* Как заполнять фон */
               background-position: center; /* Положение фона */
           }
       </style>
</head>
<body>
  <h1 style="text-align: center;">Найди контакт по ID</h1>
  <?php

echo '<form action="send.php" method="POST">';
echo '<label for="id">ID:</label>

<input
type="number"
id="id"
name="id"
minlength="1"
size="10"
style="margin-right: 20px;"
required
>';

echo'<button type="submit">Применить</button></form>
<hr>';

// Проверка наличия сеансовой переменной
if (isset($_SESSION['person'])) {
    $person = $_SESSION['person'];

    // Вывод значений массива на страницу
    echo '<p>Имя: ' . $person['name'] . '</p>';
    echo '<p>Фамилия: ' . $person['last_name'] . '</p>';

    // Очистка сеансовой переменной
    unset($_SESSION['person']);
}

?>

</body>
</html>