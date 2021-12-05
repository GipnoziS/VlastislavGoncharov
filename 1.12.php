<?
include "header.php";
?>
    <div class="code">
        <?
        echo "<br><b>13 Слайд, 4 задача:</b><br>";
        function RandomMassive(){
            $r = rand(1,15);
            for($i=0; $i<$r; $i++) $arr[$i] = rand(0,100);
            return($arr);
        }
        $RndArr = RandomMassive();
        print_r($RndArr);
        ?>
    </div>

    <div class="code">
        <?
        echo "<br><b>13 слайд, 5 задача:</b><br>";

        function ArrSum($Arr){
            $average = array_sum($Arr)/count($Arr);
            return($average);
        }

        $rand = rand(1,15);
        for($i=0; $i<$r; $i++) $SumArr[$i] = rand(0,100);
        echo ArrSum($RndArr);

        ?>
    </div>

    <div class="code">
        <?
        echo "<br><br><b>13 слайд, 6 задача:</b><br>";

        function PodschetSlov($str){
            return str_word_count($str);
        }
        $str6 = "One two three four five";
        echo PodschetSlov($str6);

        ?>
    </div>


<?
include "footer.php";