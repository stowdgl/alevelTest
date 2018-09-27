<?php


require_once 'db.php';
if(isset($_POST['submitAuth'])){
    $login = trim(htmlspecialchars($_POST['loginAuth']));
    $password=password_hash($_POST['passwordAuth'],PASSWORD_DEFAULT);
   $SelPass="SELECT user_password FROM users WHERE user_login='".$login."'";
    $SelQuery="SELECT * FROM users WHERE user_login = '".$login."' AND user_password = '".$password."'";
    $query=mysqli_query($connection,$SelPass);
    foreach ($query as $item) {
        $Pass=$item['user_password'];
    }


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php


    if (password_verify($_POST['passwordAuth'],$Pass)){
        echo "<div class=\"alert alert-success\" role=\"alert\">
  Вы успешно вошли!
  <a href='../index.php'>Выйти</a>
</div>";
    }else{
        echo "<div class=\"alert alert-danger\" role=\"alert\">
Неправильный пароль либо нет пользователя с таким логином!
<a href='../index.php'>Назад</a>
</div>";
    }


?>

</body>
</html>
