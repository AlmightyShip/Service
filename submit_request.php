<?php
require_once 'db_connect.php';

$client_name = $_POST['client_name'];
$equipment_type = $_POST['equipment_type'];
$submission_date = date('Y-m-d');

$stmt = $conn->prepare("INSERT INTO repairs (client_name, equipment_type, submission_date) VALUES (:client_name, :equipment_type, :submission_date)");
$stmt->bindParam(':client_name', $client_name);
$stmt->bindParam(':equipment_type', $equipment_type);
$stmt->bindParam(':submission_date', $submission_date);

if ($stmt->execute()) {
    echo "Заявка успешно подана!<br>";
    echo '<a href="views/admin_panel.php">Перейти в административную панель</a>';
} else {
    echo "Ошибка при подаче заявки: " . $stmt->errorInfo()[2];
}

$conn = null;
?>