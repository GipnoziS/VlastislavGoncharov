<?
setcookie('login', 'name', time() + 3600 * 24 * 7);
setcookie('form-color', 'color', time() + 3600 * 24 * 7);
print_r($_COOKIE);

include "header.php";
?>
    <body bgcolor="<?$_SESSION['form-color']?>">
    <?
$name = md5('User');
$password = md5('123456');

Function AuthClear(){
    ?><div<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <p><a href="fact.php"><input type="submit" value="Посетить fact.php"></a></p>
        <p><a href="bitrix.php"><input type="submit" value="Посетить bitrix.php"></a></p>

        <select name="form-color" id="color">
            <option value="#FF0000">Red</option>
            <option value="#C71585">MediumVioletRed</option>
            <option value="#FF4500">OrangeRed</option>
            <option value="#FFFF00">Yellow</option>
            <option value="Lime">#00FF00</option>
            <option value="#00008B">DarkBlue</option>
        </select>
        <p><input type="submit" name="Color" value="Применить цвет"></p>
        <p><input type="submit" name="AuthClearBtn" value="Выйти"></p>
    </form>
    <? if (isset($_POST['AuthClearBtn'])){
        unset($_SESSION['login']);
        unset($_SESSION['password']);
    }
}

//если данные уже введены - проверяем логин и пароль
if (isset($_POST['submit'])){
    $login = $_POST['login'];
    $user_login = md5($_POST['login']);
    $user_password = md5($_POST['password']);
    if ($name == $user_login && $password == $user_password){
        echo '<p style="color:darkgreen">Добро пожаловать, ' . $login . '!</p>';
        echo '<p style="color:olive">В последний раз вы посещали сайт ' . $_COOKIE['site'] . '!</p>';
        AuthClear();
    }
    else echo '<p style="color: red">В авторизации отказано!</р>';
}
// если данные не введены - выводим на экран форму вввода
else{
?>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <label for="login">Введитe логин:</label>
    <p><input type="text" name="login" id = login size="10vh"></p>
    <label for=“password’'>Введитe пароль:</label>
    <p><input type="password" name="password" id = password size="10vh"></p>
    <p><input type="submit" name="submit" value="0тправить"></p>
    </form>
<? } ?>

</body>
<?
include "footer.php";