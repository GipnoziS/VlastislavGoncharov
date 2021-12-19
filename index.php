<?php
include "header.php";
?>
<section class="MySite">
    <div class="image_MyPhoto">
        <img src="images/MyPhoto.jpg" alt="404, попробуйте позже" title="Умный в гору не пойдёт, когда есть подъёмник">
    </div>
    <div class="div_MyFIO">
        <?
        $strMyFIO = "Гончаров Властислав Олегович";
        echo $strMyFIO;
        ?>
    </div>
    <div class="div_AboutMe">
        <?
        $strAboutMe = "<Span>Дважды программист по образованию (МИК+МаГУ).</Span>
            <Span>Обладаю начальными знаниями html, Excel VBA, Pascal, Delphi, MS Access, MySQL.</Span>
            <Span>Понимаю алгоритмы и блок схемы.</Span>
            <Span>В настоящий момент работаю старшим инженером ЭБСиТ у одного из сотовых операторов.</Span>
            <Span>Увлечения - велосипед, снорклинг, сноуборд, автотематика, Hi-Fidelity и, конечно же вылазки на природу и шашлыкинг :-)
       </Span>";

        function FirstSpanPaint($strAboutMe)
        {
            $strAboutMeArray = explode('.', $strAboutMe);
            $strAboutMeArray[0] = "<span style='color:darkslategrey'> $strAboutMeArray[0]</span>";
            $strAboutMeStr = implode('.', $strAboutMeArray);
            return ($strAboutMeStr);
        }

        echo FirstSpanPaint($strAboutMe);
        ?>

    </div>

    <div class="div_MyReviews">
        <?

        $strMyReviews = "<Span>Плюсы: интерактивность
желание помочь учащимся
домашнее задание для закрепления
запись трансляции
Минусы:
разный уровень подготовки учеников
Пожелания: хорошим дополнением и подспорьем послужил бы список часто применяемых команд с примерами. В виде призентации, либо в виде документа
        </Span>";

        function TwoColors($strMyReviews): string
        {
            $StrArr = explode(' ', $strMyReviews);
            $colorOne = 'midnightblue';
            $colorTwo = 'blueviolet';
            foreach ($StrArr as $index => $word) {
                if ($index % 2 == 0) $StrArr[$index] = '<span style="color: ' . $colorOne . '">' . "$word</span>";
                else $StrArr[$index] = '<span style="color: ' . $colorTwo . '">' . "$word</span>";
            }
            return implode(' ', $StrArr);
        }

        echo TwoColors($strMyReviews);
        ?>
    </div>
</section>

<div>
    <section class="grid">
        <?
        $ArrCar["sedan"] = "Седан - машина с 4 дверями и багажником, отделённым от салона";
        $ArrCar["hetchback"] = "Хэтчбэк - машина с 5 дверями и багажником имеющим общим с салоном объём";
        $ArrCar["pikap"] = "Пикап - машина с 2 либо 4 дверями отдельной площадкой позади салона";
        $ArrCar["vnedorozhnik"] = "Внедорожник - машина повышенной проходимости, предназначенная для бездорожья";
        $ArrCar["kupe"] = "Купе - машина с 2 дверями и схемой сидений 2+2";
        $ArrCar["cabriolet"] = "Кабриолет - машина с открытым верхом.";
        $ArrCar["universal"] = "Универсал - машина с 5 дверьми и увеличенным объёмом багажника";
        $ArrCar["crossover"] = "Кроссовер - универсал с высокой посадкой для лёгкого внедорожья";

        ?>
        <div class="KuzovImage"><img src="images/Sedan.jpg" alt="Машина поехала..."
                                     title="Седан"><? echo $ArrCar["sedan"] ?></div>
        <div class="KuzovImage"><img src="images/Hetchbek.jpg" alt="Машина поехала..."
                                     title="Хэтчбэк"><? echo $ArrCar["hetchback"] ?></div>
        <div class="KuzovImage"><img src="images/pikap.jpg" alt="Машина поехала..."
                                     title="Пикап"><? echo $ArrCar["pikap"] ?></div>
        <div class="KuzovImage"><img src="images/vnedorozhnik.jpg" alt="Машина поехала..."
                                     title="Внедорожник"><? echo $ArrCar["vnedorozhnik"] ?></div>

    </section>
    <section>
        <section class="grid1">
            <div class="KuzovImageFlex"><img src="images/kupe.jpg" alt="Машина поехала..."
                                             title="Купе"><? echo $ArrCar["kupe"] ?></div>
            <div class="KuzovImageFlex"><img src="images/kabriolet.jpg" alt="Машина поехала..."
                                             title="Кабриолет"><? echo $ArrCar["cabriolet"] ?></div>
        </section>

        <section class="grid2">
            <div class="KuzovImageFlex"><img src="images/Universal.jpg" alt="Машина поехала..."
                                             title="Универсал"><? echo $ArrCar["universal"] ?></div>
            <div class="KuzovImageFlex"><img src="images/krossover.jpg" alt="Машина поехала..."
                                             title="Кроссовер"><? echo $ArrCar["crossover"] ?></div>
        </section>
    </section>
</div>
<div>
    <?
    function strCount($AllStr)
    {
        return str_word_count($AllStr, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛЛМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЭэЮюЯя");
    }

    function Glassnye($AllStr)
    {
        // /i - игнорирует регистр /u режим кодировки UTF-8
        $glas = '/[аеёиоуыэюя]/iu';
        return preg_match_all($glas, $AllStr);
    }

    function dateDiff()
    {
        $origin = new DateTime('now');
        $target = new DateTime('1989-06-15');
        $interval = date_diff($origin, $target);
        return $interval->format(' Мне %R%a дней');
    }

    ?>
    <div class="codeList">
        <span>
            <?
            $CarStr = implode(" ", $ArrCar);
            $AllStr = $CarStr . $strAboutMe . $strMyReviews . $strMyFIO;

            echo "Количество слов на странице:" . " " . strCount($AllStr);
            echo "<br>" . "Количество гласных букв на странице:" . " " . Glassnye($AllStr);
            echo "<br>" . dateDiff();
            ?>
        </span>
    </div>
</div>
        <?
        include "footer.php";
        ?>
