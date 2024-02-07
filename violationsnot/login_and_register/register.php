<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<form action= "save_user.php" method="post">
    <div class="form one">
        <div class="title">
            <p class="title_form">Регистрация</p>
            <hr class="line_register">
            <img src="img/register.png" alt="" class="image_register">
        </div>
        <div class="Data">
            <div class="name">
                <p class="user_information">Введите имя</p>
                <input name="first_name"  type="text" class="input_information" required>
            </div>
            <div class="Surname">
                <p class="user_information">Ваш номер телефона</p>
                <input type="tel" class="input_data" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="18" maxlength="18" name="phone_number" required>
            </div>
        </div>
        <div class="Data">
            <div class="name">
                <p class="user_information">Ваша Фамилия</p>
                <input type="text" class="input_information" name="surname" required>
            </div>
            <div class="Surname">
                <p class="user_information">Ваше Отчество</p>
                <input type="text" class="input_data" name="middle_name">
            </div>
        </div>
        <div class="Email">
            <p class="user_information">Ваш Email</p>
            <input type="email" class="input_Email" name="email" required>
            <span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
        </div>
        <div class="Data">
            <div class="name">
                <p class="user_information">Придумайте пароль</p>
                <input type="password" class="input_data" name="password" required>
            </div>
            <div class="Surname">
                <p class="user_information">Введите логин</p>
                <input type="text" class="input_data" name="login" required>
            </div>
        </div>
        <div class="line_registration">
            <hr class="line_register">
        </div>
        <div class="transition">
                <a href="login.php" class="reference"><p class="reference_text">Уже есть учетная запись?</p></a>
                <a href="../index.php" class="reference"><p class="reference_text">Вернуться на главную</p></a>
        </div>
        <div class="account_creation">
            <button class="registration_reference" name="submit">
                <a href="" class="reference_registration">
                    <p class="text_reference">Зарегистрироваться</p>
                </a>
            </button>
        </div>
    </div>
</form>
</html>