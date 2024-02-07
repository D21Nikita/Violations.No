<?php
// Запускаем сессию
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в личный кабинет</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<form action= "test_user.php" method="post">
    <div class="form two">
        <div class="title">
            <p class="title_form">Вход в личный кабинет</p>
            <hr class="line_register">
            <img src="img/login.png" alt="" class="image_register">
        </div>
        <div class="enter_data">
                <p class="user_information">Введите логин</p>
                <input type="text" class="input_enter_data" required name="login">
                <span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
                <p class="user_information">Введите пароль</p>
                <input type="password" class="input_enter_data" required name="password">
        </div>
        <div class="line_registration">
            <hr class="line_register">
        </div>
        <div class="transition">
            <a href="register.php" class="reference">
                <p class="reference_text">Нет учетной записи?</p>
            </a>
            <a href="../index.php" class="reference">
                <p class="reference_text">Вернуться на главную</p>
            </a>
        </div>
        <div class="account_creation">
            <button class="login_reference" name="submit">
                <a href="" class="reference_registration">
                    <p class="text_reference">Войти</p>
                </a>
            </button>
        </div>
    </div>
</form>
</html>