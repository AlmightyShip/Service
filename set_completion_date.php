<?php
require_once 'db_connect.php';

$request_id = $_POST['request_id'];
$completion_date = $_POST['completion_date'];

$stmt = $conn->prepare("UPDATE repairs SET completion_date=:completion_date WHERE id=:request_id");
$stmt->bindParam(':request_id', $request_id);
$stmt->bindParam(':completion_date', $completion_date);

if ($stmt->execute()) {
    echo "Дата завершения установлена!";
} else {
    echo "Ошибка при установке даты завершения: " . $stmt->errorInfo()[2];
}

$conn = null;
?>