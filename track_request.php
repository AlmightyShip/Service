<?php
require_once 'db_connect.php';

$request_id = $_GET['request_id'];

$stmt = $conn->prepare("SELECT * FROM repairs WHERE id=:request_id");
$stmt->bindParam(':request_id', $request_id);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    echo "<p>Номер заявки: " . $row["id"] . "</p>";
    echo "<p>ФИО клиента: " . $row["client_name"] . "</p>";
    echo "<p>Дата подачи: " . $row["submission_date"] . "</p>";
    echo "<p>Тип оборудования: " . $row["equipment_type"] . "</p>";
    echo "<p>Статус заявки: " . $row["status"] . "</p>";
    if (!is_null($row["completion_date"])) {
        echo "<p>Дата завершения: " . $row["completion_date"] . "</p>";
    }
} else {
    echo "Запись не найдена.";
}

$conn = null;
?>