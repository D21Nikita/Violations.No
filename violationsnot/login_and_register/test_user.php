<?php
session_start();
$password = $_POST['password'];
$login = $_POST['login'];

if (!empty($password) && !empty($login)) {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'SiteBase';
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }
    
    $password = mysqli_real_escape_string($conn, $password);
    $login = mysqli_real_escape_string($conn, $login);
    
    // Создаем запрос для проверки входа пользователя
    $user_query = "SELECT * FROM User WHERE password = '$password' AND login = '$login'";
    $user_result = mysqli_query($conn, $user_query);
    
    // Создаем запрос для проверки входа администратора
    $admin_query = "SELECT * FROM Employee WHERE Password = '$password' AND Login = '$login'";
    $admin_result = mysqli_query($conn, $admin_query);
    
    if (mysqli_num_rows($user_result) > 0) {
        // Вход обычного пользователя
        ?>
        <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Вход</title>
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
                <div style='text-align:center;'>Вы успешно вошли в личный кабинет, как пользователь</div>
            </div>
            <button class="container_2" onclick="location.href='../Application-formation-page/Application-formation-page.php'">Войти в личный кабинет пользователя</button>
        </body>
        </html>
        <?php
    } elseif (mysqli_num_rows($admin_result) > 0) {
        // Вход администратора
        ?>
        <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Вход</title>
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
                <div style='text-align:center;'>Вы успешно вошли в личный кабинет, как администратор</div>
            </div>
            <button class="container_2" onclick="location.href='../adminpanel/admin-panel.php'">Войти в личный кабинет администратора</button>
        </body>
        </html>
        <?php
    } else {
        // Неверные учетные данные
        echo "Неверные учетные данные";
    }
    
    // Закрываем соединение с БД
    mysqli_close($conn);
} else {
    // Выводим сообщение об ошибке
    echo "Пожалуйста, заполните все поля";
}
?>
