<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подача заявки</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h1>Подача заявки на ремонт</h1>
    <form action="../submit_request.php" method="post">
    <label for="client_name">ФИО:</label><br>
    <input type="text" name="client_name" required><br><br>

    <label for="equipment_type">Тип оборудования:</label><br>
    <select name="equipment_type" required>
        <option value="">Выберите тип оборудования</option>
        <option value="Телефон">Телефон</option>
        <option value="Ноутбук">Ноутбук</option>
        <option value="Планшет">Планшет</option>
        <option value="Другое">Другое</option>
    </select><br><br>

    <button type="submit">Отправить заявку</button>
</form>
</div>
</body>
</html>