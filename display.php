<?php
$fullname = htmlspecialchars($_POST['fullname']);
$password = htmlspecialchars($_POST['password']);
$isThatIlonLenin = false;
if($fullname == "Илон Ленин" && $password == "12345678")
{
    $isThatIlonLenin = true;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Отображение данных</title>
</head>
<body>
    <h2>Введённые данные</h2>
    <?php if ($isThatIlonLenin): ?>
        <p><strong>ФИО:</strong> <?php echo $fullname; ?></p>
        <p><strong>Пароль:</strong> <?php echo $password; ?></p>
    <?php else: ?>
        <p><?php echo "Who are you?" ?></p>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <input type="submit" value="Выйти из аккаунта">
        </form>
</body>
</html> 
