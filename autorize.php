<?php

class Autorize
{

    public static function UnAuth()
    {
        $_SESSION['auth'] = 'n';
    }

    public static function Auth($dbconnect, $login, $password)
    {

        $login = mysqli_real_escape_string($dbconnect, $login);
        $DBResult = mysqli_query($dbconnect, "select `Name`, `Password` FROM `userident` where `Name` = '$login'");
        if (!$DBResult->num_rows) {
            echo '<p style="color: red">Данный пользователь не найдён</р>';
        } else {
            if ($row = mysqli_fetch_assoc($DBResult)) {
                $user_password = md5($password);
                if ($row['Password'] == $user_password) {
                    $_SESSION['auth'] = 'y';
                    setcookie('login', $login, time() + 3600 * 24 * 7);
                    header('Location: ' . $_SERVER['PHP_SELF']);
                } else echo '<p style="color: red">В авторизации отказано!</р>';
            }
        }

    }

}