<?php

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col" id="colId">
            <p class="title">Регистрация</p>
            <form action="assets/reg.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваше имя (*)</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Введите имя" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваше фамилия (*)</label>
                    <input type="text" class="form-control" name="lastname"  placeholder="Введите фамилию" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваш логин (*)</label>
                    <input type="text" class="form-control" name="login" placeholder="Введите логин" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваш E-mail (*)</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль (*)</label>
                    <input type="password" class="form-control" name="password" placeholder="Пароль" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>
        <div class="col" id="colId">
            <p class="title">Вход</p>
            <form action="assets/auth.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваш логин (*)</label>
                    <input type="text" class="form-control" name="loginAuth" placeholder="Введите логин" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль (*)</label>
                    <input type="password" class="form-control" name="passwordAuth" placeholder="Пароль" required>
                </div>

                <button type="submit" name="submitAuth"  class="btn btn-primary">Вход</button>
        </div>
    </div>
</div>
</body>
</html>