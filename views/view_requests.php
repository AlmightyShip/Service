<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все заявки</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h1>Все заявки</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ФИО Клиента</th>
                <th>Тип Оборудования</th>
                <th>Дата Подачи</th>
                <th>Статус</th>
                <th>Дата Завершения</th>
                <th>Примечания</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $conn->query("SELECT * FROM repairs");
            foreach ($stmt as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['client_name']; ?></td>
                    <td><?php echo $row['equipment_type']; ?></td>
                    <td><?php echo $row['submission_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['completion_date']; ?></td>
                    <td><?php echo $row['admin_notes']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>