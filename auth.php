<?php


if (!empty($_POST['color'])) {
    setcookie('background_color', $_POST['color'], time() + 3600 * 24 * 7);
    header('Location: ' . $_SERVER['PHP_SELF']);
}

include "header.php";

require_once "autorize.php";

//$name = 'User';
//$password = 'e10adc3949ba59abbe56e057f20f883e';

    if (isset($_POST['AuthClearBtn'])){
        Autorize::UnAuth();
    }

    function ColorSwitch()
    {
        ?>
        <div>
            <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

                <select name="color">
                    <option <?= ($_COOKIE['background_color'] == '#FF0000') ? 'selected' : '' ?> value="#FF0000">Red</option>
                    <option <?= ($_COOKIE['background_color'] == '#C71585') ? 'selected' : '' ?> value="#C71585">MediumVioletRed</option>
                    <option <?= ($_COOKIE['background_color'] == '#FF4500') ? 'selected' : '' ?> value="#FF4500">OrangeRed</option>
                    <option <?= ($_COOKIE['background_color'] == '#FFFF00') ? 'selected' : '' ?> value="#FFFF00">Yellow</option>
                    <option <?= ($_COOKIE['background_color'] == '#00FF00') ? 'selected' : '' ?> value="#00FF00">Lime</option>
                    <option <?= ($_COOKIE['background_color'] == '#00008B') ? 'selected' : '' ?> value="#00008B">DarkBlue</option>
                </select>
                <p><input type="submit" name="Установить цвет"></p>
            </form>
        </div>
        <?
    }

    //если данные уже введены - проверяем логин и пароль
    if (isset($_POST['submit'])) {
        Autorize::Auth($dbconnect, $_POST['login'], $_POST['password']);
    }

    if ($_SESSION['auth'] == 'y') {
        echo '<p style="color:darkgreen">Добро пожаловать, ' . $_COOKIE['login'] . '!</p>';
        echo '<p style="color:olive">В последний раз вы посещали сайт ' . $_COOKIE['site'] . '!</p>';
        ColorSwitch();
        ?>
        <div>
            <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                <p><input type="submit" name="AuthClearBtn" value="Выйти"></p>
            </form>
        </div>
        <?
    } // если данные не введены - выводим на экран форму вввода
    else {
        ?>
        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="login">Введитe логин:</label>
            <p><input type="text" name="login" id=login size="10vh"></p>
            <label for="password">Введитe пароль:</label>
            <p><input type="password" name="password" id=password size="10vh"></p>
            <p><input type="submit" name="submit" value="0тправить"></p>
        </form>
    <? }

if ($_SESSION['auth'] == 'y') {
    ?>
    <form method="post">
        <p><a href="fact.php">Посетить fact.php</a></p>
        <p><a href="bitrix.php">Посетить bitrix.php</a></p>
    </form>
 <?
}
include "footer.php";