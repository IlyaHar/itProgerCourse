<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $db_user = 'root';
    $pass = '';
    $db_name = 'store';
    $host = 'localhost';
    $port = 3306;

    $dsn = "mysql:host=$host;dbname=$db_name;port=$port";
    $pdo = new PDO($dsn, $db_user, $pass);

    $sql = "SELECT * FROM `users` WHERE `login` = :login";
    $query = $pdo->prepare($sql);
    $query->execute(['login' => 'john']);

    $user = $query->fetch(PDO::FETCH_OBJ);

    $userId = $user->id;

    $query = $pdo->prepare("SELECT * FROM `items` WHERE `category` = :category");
    $query->execute(['category' => 'hats']);

    $items = $query->fetchAll(PDO::FETCH_OBJ);
    $items = [2, 3];

    // $query = $pdo->prepare("INSERT INTO `orders` (`userId`, `itemId`) VALUES ($userId, $items[0]), ($userId, $items[1])");
    // $query->execute();

    $query = $pdo->prepare("
    SELECT `users`.`login`, `items`.`title` FROM `orders` 
    JOIN `users` ON `users`.`id` = `orders`.`userId`
    JOIN `items` ON `items`.`id` = `orders`.`itemId`;");
    $query->execute();

    echo "<h2>Все заказы</h2>";

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo  "<b>$row->login</b> - <u>$row->title</u><br>";
    }

    ?>
</body>
</html>