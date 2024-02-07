<?php
// Запускаем сессию
session_start();

// Получаем данные из формы
$first_name = $_POST['first_name'];
$phone_number = $_POST['phone_number'];
$surname = $_POST['surname'];
$middle_name = $_POST['middle_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// Проверяем данные на валидность
if (!empty($first_name) && !empty($phone_number) && !empty($surname) && !empty($email) && !empty($password) && !empty($login)) {
    // Подключаемся к серверу БД
    $db_host = 'localhost'; // адрес сервера БД
    $db_user = 'root';      // имя пользователя БД
    $db_password = '';  // пароль пользователя БД
    $db_name = 'SiteBase'; // имя БД
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }
    
    // Экранируем специальные символы в данных
    $first_name = mysqli_real_escape_string($conn, $first_name);
    $phone_number = mysqli_real_escape_string($conn, $phone_number);
    $surname = mysqli_real_escape_string($conn, $surname);
    $middle_name = mysqli_real_escape_string($conn, $middle_name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $login = mysqli_real_escape_string($conn, $login);
    
    // Создаем запрос для вставки данных в БД
    $sql = "INSERT INTO User (first_name, phone_number, surname, middle_name, email, password, login) 
            VALUES ('$first_name', '$phone_number', '$surname', '$middle_name', '$email', '$password', '$login')";
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .container_2 {
            position: fixed;
	        left: 44.5%;
            width: 11%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (mysqli_query($conn, $sql)) {
            // Данные успешно добавлены в БД
            echo "<div style='text-align:center;'>Вы успешно зарегистрированы</div>";
        } else {
            // Ошибка при добавлении данных в БД
            echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
        }
        ?>
    </div>
     <button class="container_2" onclick="location.href='login.php'">Войти</button>
</body>

</html>
    <?php
    // Закрываем соединение с БД
    mysqli_close($conn);
} else {
    // Выводим сообщение об ошибке
    echo "Пожалуйста, заполните все поля";
}

?>
