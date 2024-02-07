<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <title>Админ панель</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="menu">
        <div class="logo-admin">
          <img src="img\Нарушениям.Нет.svg" alt="logo" class="logo">
          <div class="stick"></div>
          <h3>Панель администратора</h3>
        </div>
        <div class="menu-navigation">
          <div class="menu-links"><b><a href="#" class="menu-link">Подать заявку</a></b>
          <img src="img\right arrow.svg" alt=""></div>
          <div class="menu-links"><b><a href="#" class="menu-link">Выйти </a></b>
          <img src="img\x.svg" alt=""></div>
        </div>
      </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <div class="main-text">
        <img src="img\text icon.svg" alt="icon" class="icon-title">
        <p class="main-title">Список заявлений</p>
      </div>
      <div class="long-stick"></div>
      <table class="table">
        <tr>
          <th class="table-title"><b>Фамилия</b></th>
          <th class="table-title"><b>Имя</b></th>
          <th class="table-title"><b>Отчество</b></th>
          <th class="table-title"><b>Описание нарушения</b></th>
          <th class="table-title"><b>Номер автомобиля</b></th>
          <th class="table-title"><b>Статус заявления</b></th>
        </tr>
        <tr>
          <td class="table-text">Масянин</td>
          <td class="table-text">Масяня</td>
          <td class="table-text">Масяньевич</td>
          <td class="table-text">Очень много умного текста, который тут есть и его прям очень много понятно?</td>
          <td class="table-text">000-000-0000</td>
          <td class="table-text"> <label for="state"></label>
            <select name="state" id="state" >
            <option value="awaiting" selected>В ожидании<img src="img\loading.svg" alt=""></option>
            <option value="refusing">Отменено </option>
            <option value="accepting">Завершено</option>
          </select>
          <button class="delete">Удалить</button></td>
        </tr>
        <tr>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
        </tr>
      </table>
    </div>
  </main>
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="js/main.js" type="text/javascript"></script>
</body>
</html>