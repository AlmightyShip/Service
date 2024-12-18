<?php
$servername = "localhost";
$username = "root"; // Замените на имя вашего пользователя БД
$password = "";     // Замените на пароль вашего пользователя БД
$dbname = "Service"; // Замените на название вашей базы данных

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>