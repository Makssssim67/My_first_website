<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Надточий М.В.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Регистрация</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <from method="POST" action="registration.php">
                    <div class="row form_reg"><input class="form" type="email" name="email" placeholder="Email"></div>
                    <div class="row form_reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                    <div class="row form_reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                    <button type="submit" class="btn_red btn_reg" name="submit">Продолжить</button>
                </from>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
    $username = $_POST['login'];
    $pass = $_POST['password'];
    if (!$email || !$username || !$pass) die("Пожайлуйста введите все значения!");

    $sql = "INSERT INTO user (email, username, pass) VALUES ('$email', '$username', '$pass')";

    if (!mysqli_query($link, $sql)){
        echo "Не удалось добавить рользователя";
    }
}
?>

<body>
    <div class="container nav_Pivo">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav_text">Информация о легенде!</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Моя анкета для позитива</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h2>Надточий Максим Вячеславович, я студент ПГУТИ и изучаю информационную безопасность.
                    Я увлечен миром компьютеров и технологий, поэтому стремлюсь погрузиться в изучение защиты данных и сетевой безопасности.
                    Мне интересно разбираться в сложных системах и находить уязвимости, чтобы помогать защищать информацию от киберугроз.
                    В свободное время я также люблю изучать новые технологии и участвовать в хакатонах, где могу применить свои знания и навыки.
                    Я стремлюсь стать профессионалом в области информационной безопасности и делать вклад в обеспечение цифровой безопасности нашего мира.</h2>
            </div>
            <div class="col-4">
                <div class="row my_photo"></div>
                <div class="row"><p>Надточий М.В.</p></div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="button_js col-12">
            <button id="myButton">ТЫК ТЫК</button>
            <p id="demo"></p>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/Button.js"></script>
</body>

</html>
