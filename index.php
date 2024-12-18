<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт электроники</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Добро пожаловать!</h1>
    <div class="links">
        <a href="views/submit_request.php">Подать заявку</a>
        <a href="views/track_request.php">Отследить заявку</a>
        <?php if ($_SESSION['role'] == 'admin'): ?>
            <a href="views/admin_panel.php">Администраторская панель</a>
        <?php endif; ?>
    </div>
</div>
</body>
</html>