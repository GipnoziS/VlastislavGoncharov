<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
<?
function ThemeChange(){
$now_hours = date('H');
if($now_hours >= 8 && $now_hours <= 20){
    $time = 'time-day';
}
else{
    $time = 'time-night';
}
return($time);
}
include "header.php";
?>
<body class="<?=ThemeChange()?>">

<!--<section class="MySite">
    <div class="Header_Style">
    <header ><ul><li><a href="MendeleevPeriodicTable.html">Переодическая таблица
    </a>
    </li>
    </ul>
</header></div>-->
<section class="MySite">
    <div class="image_MyPhoto">
        <img src="images/MyPhoto.jpeg" alt="404, попробуйте позже" title="Служу 1С Битриксу! :-)"  width="100%"></div>
    <div class="div_MyFIO">
        <?
        $strMyFIO = "Гончаров Властислав Олегович";
        echo $strMyFIO;
        ?></div>
    <div class="div_AboutMe">
        <?
        $strAboutMe = "<Span>Дважды программист по образованию (МИК+МаГУ).</Span>
<Span>Обладаю начальными знаниями html, Excel VBA, Pascal, Delphi, MS Access, MySQL.
            <Span>Понимаю алгоритмы и блок схемы.<Span>
       <Span>В настоящий момент работаю старшим инженером ЭБСиТ у одного из сотовых операторов.<Span>
            <Span>Увлечения - велосипед, снорклинг, сноуборд, автотематика, Hi-Fidelity и, конечно же шашлыкинг :-)
       <Span>";

        function FirstSpanPaint($strAboutMe){
        $strAboutMeArray = explode('.', $strAboutMe);
        $strAboutMeArray[0] = "<span style='color:darkslategrey'> $strAboutMeArray[0]</span>";
        $strAboutMeStr = implode('.',$strAboutMeArray);
        return($strAboutMeStr);
        var_dump($strAboutMeStr);
        }
        echo FirstSpanPaint($strAboutMe);
        ?>

    </div>

    <div class="div_MyReviews">
        <?
<<<<<<< HEAD
        $strMyReviews = "<Span>+ интерактивность
        + помочь учащимся
        + домашнее задание для закрепления
        + запись трансляции

        - разный уровень подготовки учеников

        Хорошим дополнением и подспорьем послужил бы список часто применяемых команд с примерами. В виде призентации, либо в виде документа
=======
        $strMyReviews = "<Span>Плюсы: интерактивность
желание помочь учащимся
домашнее задание для закрепления
запись трансляции
Минусы:
разный уровень подготовки учеников
Пожелания: хорошим дополнением и подспорьем послужил бы список часто применяемых команд с примерами. В виде призентации, либо в виде документа
>>>>>>> 249b23d (03.12.21)
        </Span>";

        function TwoColors($strMyReviews): string {
            $StrArr = explode(' ', $strMyReviews);
            $colorOne = 'midnightblue';
            $colorTwo = 'blueviolet';
            foreach ($StrArr as $index => $word) {
                if ($index % 2 == 0) $StrArr[$index] = '<span style="color: ' . $colorOne . '">'. "$word</span>";
                else $StrArr[$index] = '<span style="color: ' . $colorTwo . '">'. "$word</span>";
            }
            return implode(' ',$StrArr);
        }
        echo TwoColors($strMyReviews);
        ?>
    </div>
    </section>
<<<<<<< HEAD
=======

<div>
>>>>>>> 249b23d (03.12.21)
    <section class="grid">

        <div class="KuzovImage"><img src="images/Sedan.jpg" alt="Машина поехала..." title="Седан" width="100%">Седан - машина с 4 дверями и багажником, отделённым от салона</div>
        <div class="KuzovImage"><img src="images/Hetchbek.jpg" alt="Машина поехала..." title="Хэтчбэк" width="100%">Хэтчбэк - машина с 5 дверями и багажником имеющим общим с салоном объём</div>
        <div class="KuzovImage"><img src="images/pikap.jpg" alt="Машина поехала..." title="Пикап" width="100%">Пикап - машина с 2 либо 4 дверями отдельной площадкой позади салона</div>
        <div class="KuzovImage"><img src="images/vnedorozhnik.jpg" alt="Машина поехала..." title="Внедорожник" width="100%">Внедорожник - машина повышенной проходимости, предназначенная для бездорожья</div>

    </section>

        <section class="grid1">
            <div class="KuzovImageFlex"><img src="images/kupe.jpg" alt="Машина поехала..." title="Купе" width="100%">Купе - машина с 2 дверями и схемой сидений 2+2</div>
            <div class="KuzovImageFlex"><img src="images/kabriolet.jpg" alt="Машина поехала..." title="Кабриолет" width="100%">Кабриолет - машина с открытым верхом.</div>
        </section>

    <section class="grid2">
        <div class="KuzovImageFlex"><img src="images/Universal.jpg" alt="Машина поехала..." title="Универсал" width="100%">Универсал - машина с 5 дверьми и увеличенным объёмом багажника</div>
        <div class="KuzovImageFlex"><img src="images/krossover.jpg" alt="Машина поехала..." title="Кроссовер" width="100%">Кроссовер - универсал с высокой посадкой для лёгкого внедорожья</div>

    </section>
<<<<<<< HEAD
=======
    <div>
        <?
        function strCount($AllStr){
            return str_word_count($AllStr, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛЛМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЭэЮюЯя");
         }

         function Glassnye($AllStr){
            // /i - игнорирует регистр /u режим кодировки UTF-8
            $glas= '/[аеёиоуыэюя]/iu';
            return preg_match_all($glas, $AllStr);
         }

         function dateDiff(){
            $origin = new DateTime('1989-06-15');
            $target = new DateTime('now');
            $interval = date_diff($origin, $target);
            return $interval->format('%R%a дней');
        }

        ?>
        <div style="codeList">
            <?
            var_dump(dateDiff());
            ?>

        </div>

>>>>>>> 249b23d (03.12.21)

    <?
    include "footer.php";
    ?>
    <!--
    <footer><section class="f-container">
        <a href="https://vk.com">
            <div class="f-picture">
                <img  src="images/vk_icon.png" alt="Иконка VK" title="Подписывайтесь на нас Вконтакте" width="100%">
            </div>
        </a>

        <a href="https://instagram.com">
            <div class="f-picture">
                <img src="images/instagram_icon.png" alt="Иконка instagram" title="Свежие Stories в нашем instagram" width="100%">
            </div>
        </a>

        <a href="https://you-tube.com">
            <div class="f-picture"><img src="images/youtube_icon.png" alt="Иконка YouTube" title="Смотрите нас в YouTube" width="100%">
            </div>
        </a>

        <a href="https://fb.com">
            <div class="f-picture">
                <img src="images/facebook_icon.png" alt="Иконка Facebook" title="Читайте интересные статьи в Facebook" width="100%">
            </div>
        </a>

    </section>
  </footer>
</body>
</html> -->