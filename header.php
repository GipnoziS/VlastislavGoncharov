<?
session_start();
$hostname = 'localhost';
$username = 'Vlastislav';
$password = 'Vlastislaff';
$dbname = 'Ident';

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname) or die ("-");
/*mysqli_query($dbconnect, "CREATE DATABASE Ident") or die("2");
//var_dump($dbconnect);
mysqli_select_db($dbconnect,$dbname);
mysqli_query($dbconnect, "CREATE TABLE UserIdent (
ID_User INT NOT NULL AUTO_INCREMENT,
Name VARCHAR(50) NOT NULL,
Password VARCHAR(200) NOT NULL,
PRIMARY KEY ( ID_User )
                   )" );
*/

/*$dbconnect = mysqli_connect($hostname, $username, $password) or die ("3");
mysqli_select_db($dbconnect,$dbname);
mysqli_query($dbconnect, "INSERT INTO UserIdent(ID_User,Name,Password) VALUES (null,'User','c4ca4238a0b923820dcc509a6f75849b')");
mysqli_query($dbconnect, "INSERT INTO UserIdent(ID_User,Name,Password) VALUES (null,'Admin','c81e728d9d4c2f636f067f89cc14862c')");
mysqli_query($dbconnect, "INSERT INTO UserIdent(ID_User,Name,Password) VALUES (null,'Guest','eccbc87e4b5ce2fe28308fd9f2a7baf3')");*/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?
function ThemeChange()
{
    $now_hours = date('H');
    if ($now_hours >= 8 && $now_hours <= 20) {
        $time = 'time-day';
    } else {
        $time = 'time-night';
    }
    return ($time);
}

if ($_SERVER['PHP_SELF'] == '/MySite/index.php') { ?>
    <body class="<?= ThemeChange() ?>">
<? } else { ?>
    <body bgcolor="<?= $_COOKIE['background_color'] ?>">
<?
} ?>
<header>
    <div class="Header_Style">
        <ul>
            <li>
                <a href="index.php">Главная станица</a>
                <a href="MendeleevPeriodicTable.php">Переодическая таблица </a>
                <a href="26.11.php">Задания 26.11</a>
                <a href="29.11.php">Задания 29.11</a>
                <a href="1.12.php">Задания 01.12</a>
                <a href="3.12.php">Задания 03.12</a>
                <a href="auth.php">Авторизация</a>
            </li>
        </ul>
    </div>
</header>