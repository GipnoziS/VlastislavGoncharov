<?
include "header.php";
?>
<div class="code">
<?
echo "<br>Первая задача:<br>";
$arr = [];
$num = 10;
for($i=0; $i<$num;$i++){
    $arr[] = mt_rand(0,1000);
}
foreach ($arr as $value) if ($value % 2 == 0) echo "<br><b> $value </b>"; else echo "<br>$value";

?>
</div>
<div class="code">
    <?
    echo "<br>Вторая задача:<br>";
    // массив Машины
    $m = array('Honda','Hummer','BMW','Toyota');
    // массив Самолёты
    $s = array('АН','TU-144','Boing','СУ');
    // массив Танки
    $t = array('Тигр','Пантера','Т-34','Аль Халид');
    // массив Корабли
    $k = array('Кузнецов','Ямато','Ясень','Петропавловск');
    // двумерный массив Техника
    $THN = array($m, $s, $t, $k);
    // обход двумерного массива
    for($i=0; $i < count($THN); $i++) {
        for ($q = 0; $q < count($THN[$i]); $q++) {
            if (mb_substr($THN[$i][$q], 0, 1) == "А") {
                echo "<br>";
                echo $THN[$i][$q];
            }
        }
    }
    ?>
</div>

<div class="code">
    <?
    echo "<br>Третья задача:<br>";
    $zAr = array(65,32,558,98,75);
    $xAr = array(344,56);
    $cAr = array(4,23,6,98,587);
    $vAr = array(56,59,63,98,78,56,98,89);
    $ArThree = array($zAr, $xAr, $cAr, $vAr);
    // обход двумерного массива
    for($i=0; $i < count($ArThree); $i++)
    {
        for($q=0; $q < count($ArThree[$i]); $q++)
        {$el++;
            }
        echo "<br> Количество элементов в массиве $i равно $q";
    }    echo "<br>Всего $i массива. <br> Количество элементов в них равно $el ";

    ?>
</div>

<?
include "footer.php";