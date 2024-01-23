<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="checkPost.php" method="POST">
        <h2>Форма регистрации</h2>
        <input type="text" name="name" placeholder="Введите свое имя..">
        <input type="text" name="email" placeholder="Введите свою электронную почту..">
        <input type="tel" name="tel" placeholder="Введите свой номер телефона..">
        <label for="car">Выберите любимые автомобили</label>
        <select multiple name="cars[]" id="">
            <option value="BMW">BMW</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Audi">Audi</option>
            <option value="Volvo">Volvo</option>
        </select>
        <label for="movie">Введите любимые фильмы. Минимум 2 или более. Вводить через запятую</label>
        <input type="text" name="movie" placeholder="Любимые фильмы">
        <input class="btn" type="submit">
    </form>
</body>
</html>