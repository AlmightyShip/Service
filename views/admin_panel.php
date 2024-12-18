<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель управления</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h1>Панель управления</h1>
    <ul>
        <li><a href="view_requests.php">Просмотреть все заявки</a></li>
        <li><a href="add_admin_note.php">Добавить примечание к заявке</a></li>
        <li><a href="change_status.php">Изменить статус заявки</a></li>
        <li><a href="set_completion_date.php">Установить дату завершения ремонта</a></li>
    </ul>
</div>
</body>
</html>