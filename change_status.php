<?php
require_once 'db_connect.php';

$request_id = $_POST['request_id'];
$new_status = $_POST['new_status'];

$stmt = $conn->prepare("UPDATE repairs SET status=:new_status WHERE id=:request_id");
$stmt->bindParam(':request_id', $request_id);
$stmt->bindParam(':new_status', $new_status);

if ($stmt->execute()) {
    echo "Статус заявки обновлен!";
} else {
    echo "Ошибка при изменении статуса заявки: " . $stmt->errorInfo()[2];
}

$conn = null;
?>