<?
include "header.php";
?>
<div class="code">
<?
echo "<br><b>18 Слайд, первая задача:</b><br>";
$str1 = "fact";
echo str_replace("f", "F", $str1);
?>
</div>
<div class="code">
    <?
    echo "<br><b>18 слайд, вторая задача:</b><br>";
    $str2 = "Фамилия, Имя, Отчество";
    var_dump($str2);
    $FIO = explode(', ', $str2);
    echo "<br><b>Полученный массив</b><br>";
    print_r($FIO);
    $FIOrev = [];
    $k = 0 ;
    for($i=1, $k=0; $i>=0; $i--, $k++ ) $FIOrev[$k] = $FIO[$i];
    echo "<br><b>Расставленные нужным порядком элементы в массиве</b><br>";
    print_r($FIOrev);
    $strFIO = implode(' ',$FIOrev);
    echo "<br><b>Выводим массив с нужной формой в строку</b><br>";
    var_dump($strFIO);

    ?>
</div>

<div class="code">
    <?
    echo "<br><br><b>18 слайд, третья задача:</b>";
    $str3 = "Привет, мир";
    $arr3 = mb_str_split($str3, 1);
    echo "<br><b>Делаем массив где каждый элемент это одна буква</b><br>";
    print_r($arr3);
    foreach ($arr3 as $value) if ($value == "и") $kol++;
    echo "<br><b>Получаем количество повторений строчной буквы 'и' равное: </b> $kol ";




    ?>
</div>

    <div class="code">
        <?
        echo "<br><br><b>18 слайд, четвёртая задача:</b>";
        $str4 =  "html css php";
        echo "<br>" . mb_substr($str4, 0, 4);
        echo "<br>" . mb_substr($str4, 5, 3);
        echo "<br>" . mb_substr($str4, 10, 3);
        ?>
    </div>

    <div class="code">
        <?
        echo "<br><br><b>18 слайд, пятая задача:</b><br>";
        $str5 =  "filephoto.png";
        $str5_1 =  ".png";
        var_dump($str5);
        if (mb_substr($str5, -4, 4) == $str5_1){
            echo "<br><b>Да</b><br>строка заканчивается на .png";}
        else { echo "<br><b>Нет</b><br>строка не заканчивается на .png";
        }

            ?>
    </div>

<?
include "footer.php";