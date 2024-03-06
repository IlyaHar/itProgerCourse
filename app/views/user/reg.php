<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['title'] ?></title>
</head>
<body>
<?php if (!empty($_POST['email'] && $_POST['login'])): ?>
<p>Данные полученные от пользывателя: </p>
<p><strong>Login: </strong> <?= $data['login'] ?></p>
<p><strong>Email: </strong> <?= $data['email'] ?></p>
<?php endif; ?>
<h1>Форма регистрации</h1>
<form action="reg" method="POST">
    <input type="text" name="login" placeholder="Введите логин" /><br><br>
    <input type="email" name="email" placeholder="Введите email" /><br><br>
    <input type="submit" />
</form>
</body>
</html>
