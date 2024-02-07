<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница формирования заявления</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
   <div class="conteiner">
    <div class="header">
        <div class="header-content">
            <div class="header-content-one">
<h2 class="text-color">Нарушениям.Нет</h2>
<img src="img\Line 1.svg" alt="" style="margin-right: 20px; margin-left: 20px;">
<h4 class="text-color">Формирование заявления</h4>
            </div>
            <div class="header-content-two">
<a href=""><h5 class="text-color">Подать заявку<img src="img\8666777_chevron_right_arrow_icon 1.svg" alt="" style="margin-right: 30px;"></h5></a>

<a href="../index.php"><h5 class="text-color">Выйти<img src="img\8666595_x_icon 1.svg" alt=""></h5></a>

            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-text">
            <img src="img\8666712_align_left_icon 1.svg" alt="">
            <h1 style="font-weight: normal;margin-left: 10px;">Форма заявления</h1>
        </div>
        <img src="img\Line 2 (1).svg" alt="" style="margin-bottom: 30px; height: auto;">
        <div class="main-block">
            <form action="" class="main-block-form">
                <p class="main-block-text">Ваш государственный региональный номер автомобиля:</p>
                <input type="text" placeholder="Введите номер автомобиля" class="main-block-input">
                <p class="main-block-text">Описание нарушения:</p>
                <textarea name="" id="" cols="30" rows="10" placeholder="Введите описание нарушения" class="main-block-textarea"></textarea>
                <img src="img\Line 2.svg" alt="" style="margin-top: 40px;margin-bottom: 40px;">
                <a href="../reports_page/report-panel.html"><button class="main-block-button">Отправить</button></a>
            </form>
        </div>
    </div>
   </div> 
</body>
</html>