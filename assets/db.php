<?php
$connection=mysqli_connect('127.0.0.1','mysql','mysql','formphp');
if (!$connection){
    echo "<div class=\"alert alert-danger\" role=\"alert\">
 Нет подключения к базе данных!
</div>";

}