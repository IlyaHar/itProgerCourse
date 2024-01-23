<?php
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['tel']));
$cars = $_POST['cars'];
$movies = explode(",", $_POST['movie']);

if (mb_strlen($name) < 3) {
    echo "Имя должно быть не менее 3 символов.";
} elseif (mb_strlen($email) < 5 ) {
    echo "Электронная почта введена не корректно.";
} elseif (mb_strlen($phone) < 10) {
    echo "Номер телефона должен быть не менее 10 символов.";
} elseif (!isset($cars)) {
    echo "Выберите хотя бы одну любимую машину.";
} elseif (count($movies) < 2) {
    echo "Выберите минимум 2 любимых фильма.";
} else {
    echo "<h1>Вся информация</h1> 
    <p><strong>Имя:</strong> <i>$name</i></p>
    <p><strong>Электронная почта:</strong> <i>$email</i></p>
    <p><strong>Номер телефона:</strong> <i>$phone</i></p>
    <h4>fav cars:</h4>
    ";

    foreach($cars as $model) {
        echo "
        <ul>
        <li>$model</li>
        </ul>";
    }

    echo "<h4>fav movies:</h4>";

    foreach($movies as $favMovie) {
        echo "
        <ul>
        <li>$favMovie</li>
        </ul>
        ";
    }
}
