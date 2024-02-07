<?php
// Запускаем сессию
session_start();
?>
<?php
$servername = "localhost"; // адрес сервера базы данных
$username = "root"; // имя пользователя базы данных
$password = ""; // пароль пользователя базы данных
$dbname = "SiteBase"; // имя базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
echo "Подключение к базе данных успешно установлено";

// Дополнительный код для выполнения операций с базой данных

// Закрытие подключения
$conn->close();
?>
