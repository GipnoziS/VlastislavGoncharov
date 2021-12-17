    <?
    session_start();
    $hostname = 'localhost';
    $username = 'Vlastislav';
    $password = 'Vlastislaff';
    $dbname = 'Ident';

    /*$dbconnect = mysqli_connect($hostname, $username, $password) or die ("1");
    mysqli_query($dbconnect, "CREATE DATABASE Ident") or die("2");
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
    mysqli_query($dbconnect, "INSERT INTO UserIdent(ID_User,Name,Password) VALUES (null,'User','e10adc3949ba59abbe56e057f20f883e')");
    mysqli_query($dbconnect, "INSERT INTO UserIdent(ID_User,Name,Password) VALUES (null,'Admin','21232f297a57a5a743894a0e4a801fc3')");
    mysqli_query($dbconnect, "INSERT INTO UserIdent(ID_User,Name,Password) VALUES (null,'Guest','084e0343a0486ff05530df6c705c8bb4')");*/

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
    <header>
        <div class="Header_Style">
            <ul><li>
                    <a href="index.php" >Главная станица</a>
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
    <body bgcolor="<?= $_COOKIE['background_color'] ?>">
