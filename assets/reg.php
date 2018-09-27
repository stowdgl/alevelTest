<?php
require_once 'db.php';
if(isset($_POST['submit'])){
    $firstname=trim(htmlspecialchars($_POST['firstname']));
    $lastname=trim(htmlspecialchars($_POST['lastname']));
    $login = trim(htmlspecialchars($_POST['login']));
    $email=trim(htmlspecialchars($_POST['email']));
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $InsQuery="INSERT INTO users(user_lastname,user_firstname,user_login,user_email,user_password) VALUES('".$lastname."' ,'".$firstname."','".$login."','".$email."','".$password."')";
    $query = mysqli_query($connection,$InsQuery);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
if (!$query) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">
Произошла ошибка базы данных!
<a href='../index.php'>Назад</a>
</div>";
}else{
    echo "<div class=\"alert alert-success\" role=\"alert\">
  Вы успешно зарегистрированы!
  <a href='../index.php'>Назад</a>
</div>";
}
?>
</body>
</html>
