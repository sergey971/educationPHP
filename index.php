<!-- Напишите скрипт, который будет преобразовывать температуру из градусов Цельсия в градусы Фарингейта. Для этого сделайте инпут и кнопку -->
<?php
$celsius = null;
$item = null;

if (isset($_GET["text"])) {
    $celsius = floatval($_GET["text"]);
    $item = ($celsius * 9 / 5) + 32;
}
?>

<form action="" method="GET">
    <input type="text" name="text" value="<?= isset($item) ? $item : '' ?>">
    <button type="submit">Отправить</button>
</form>
<p>Результат : <?= isset($item) ? $item : '' ?></p>
<!--Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат.-->
<?php
$item2 = null;
$num = isset($_GET["text2"]) ? $_GET["text2"] : null;

if (!is_null($num)) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
}
?>
<form action="" method="GET">
    <input type="text" name="text2" value="<? if (isset($num)) ?>">
    <button type="submit">Отправить</button>
</form>
<p>
    Факторил числа: <?= is_null($num) ? "Число не введено" : "факторил числа" . $num . " равен" . $factorial ?>
</p>
<!--Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел. -->
<h1>Поиск делителей числа</h1>
<?
$num3 = isset($_GET["text3"]) ? $_GET["text3"] : null; ?>
<form action="" method="GET">
    <input type="text" name="text3" value="">
    <button type="submit">Отправить</button>
</form>
<p>Делители числа <?= $num3 ?></p>
<? for ($i = 1; $i <= $num3; $i++) { ?>
    <? if ($num3 % $i === 0) { ?>
        <p>Делители числа <?= $i ?></p>
    <? } ?>
<? }
?>
<!-- ======================================================= -->
<h1>Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения.</h1>
<?php
if (isset($_GET['a']) and isset($_GET['b']) and $_GET['c']) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $b * $b - 4 * $a * $c;
    $x1 = round((-$b + sqrt($d)) / (2 * $a), 2);
    $x2 = round((-$b - sqrt($d)) / (2 * $a), 2);
    echo 'x1 = ' . $x1 . ', x2 = ' . $x2;
}
?>

<form action="" method="GET">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="text" name="c" placeholder=""><br><br>
    <input type="submit">
</form>
</body>

</html>

<!-- ======================================================= -->
<h1>Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных.</h1>
<?php
if (isset($_GET['a']) and isset($_GET['b']) and $_GET['c']) {
    $arr[] = $_GET['a'] * $_GET['a'];
    $arr[] = $_GET['b'] * $_GET['b'];
    $arr[] = $_GET['c'] * $_GET['c'];
    sort($arr);
    if ($arr[2] == $arr[1] + $arr[0]) {
        echo 'True';
    } else {
        echo 'False';
    }
}
?>

<form action="" method="GET">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="text" name="c" placeholder=""><br><br>
    <input type="submit">
</form>
<!-- =============================================== -->
<?php
if (isset($_GET['dat'])) {
    $dat = $_GET['dat'];
    $data = date("Y-m-d");

    $dateTimestamp = strtotime($dat);
    $currentTimestamp = strtotime($data);
    $difrent = $dateTimestamp -  $currentTimestamp;
    $birt = floor($difrent / (60 * 60 * 24));

    echo "До указанной даты осталось " . $birt . " дней.";
}
?>
<form action="" method="GET">
    <input type="date" name="dat"><br>
    <input type="submit">
</form>
<br><br>
<!-- ================================ -->
<h1>Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов и количество символов в тексте.</h1>
<?
if (isset($_GET["textarea"])) {
    $arText = $_GET["textarea"];
    // Указываем допустимые символы в аргументе charlist
    $wordCount = str_word_count($arText);
    $wordCount2 = strlen($arText);
    echo "Количество слов = " . $wordCount . "<br>";
    echo "Количество символов = " . $wordCount2 . "<br>";
}
// =======================================================
?>

<form action="" method="GET">
    <textarea type="text" name="textarea"></textarea><br>
    <input type="submit">
</form>
<!-- ============================= -->
<h1>Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.</h1>

<form action="" method="GET">
    <textarea type="text" name="textarea2"></textarea><br>
    <input type="submit">
</form>
<?
if (isset($_GET["textarea2"])) {
    $arText2 = $_GET["textarea2"];
    $sec = mb_strlen($arText2);
    $trs = array_count_values(str_split($arText2));
    foreach ($trs as $key => $val) {
        $a = 100 / $sec * $val;
        echo $key . " " . round($a, 2) . "% " . "<br>";
    }
}
// =======================================================
?>
<form action="" method="GET">
    <select name="day">
        <?php
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value ='$day'>$day</option>";
        };
        ?>

    </select>
    <select name="month">
        <?php
        $months = [
            'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
            'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
        ]; ?>

        <?php
        foreach ($months as $key => $value) {
            $monthNumber = $key + 1;
            echo "<option value = '$monthNumber'> $value</option>";
        }
        ?>
    </select>
    <select name="year">
        <?php
        for ($year = 1900; $year <= 2028; $year++) {
            echo "<option value ='$year'>$year</option>";
        };
        ?>
    </select>
    <input type="submit" value="Выбрать дату">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['day'])) {
        $day = intval($_GET['day']);
    } else {
        $day = 1;
    }

    if (isset($_GET['month'])) {
        $month = intval($_GET['month']);
    } else {
        $month = 1;
    }

    if (isset($_GET['year'])) {
        $year = intval($_GET['year']);
    } else {
        $year = 2001;
    }

    $time = mktime(0, 0, 0, $month, $day, $year);
    $date2 = date('Y-m-d', $time);

    $dayOfWeek = date("w", $time);
    $daysOfWeek = ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"];

    $dayOfWeekName = $daysOfWeek[$dayOfWeek];

    echo "День недели: $dayOfWeekName";
    echo "<br>";
    echo "День недели по счету :  $dayOfWeek";
}

?>
<!-- ====================== -->

<?php
$horoscopes = [
    'Овен' => [
        'Сегодня' => 'Гороскоп для Овна на сегодня: Сегодня ваш день будет активным и полным энергии. Будьте готовы к новым вызовам!',
        'Завтра' => 'Гороскоп для Овна на завтра: Завтра вам стоит обратить внимание на свои финансы и заботиться о них.',
    ],
    'Телец' => [
        'Сегодня' => 'Гороскоп для Тельца на сегодня: Сегодня вас ждет гармоничный день, искусство и красота будут важными для вас.',
        'Завтра' => 'Гороскоп для Тельца на завтра: Завтра будет хорошее время для общения с близкими друзьями и семьей.',
    ],
    'Близнецы' => [
        'Сегодня' => 'Гороскоп для Близнецов на сегодня: Сегодня подходящий день для обучения и общения.',
        'Завтра' => 'Гороскоп для Близнецов на завтра: Завтра уделите внимание коммуникации и обмену информацией.',
    ],
    'Рак' => [
        'Сегодня' => 'Гороскоп для Рака на сегодня: Сегодня вы будете чувствительны и заботливы. Проведите время с близкими.',
        'Завтра' => 'Гороскоп для Рака на завтра: Завтра старайтесь не перегружаться работой и отдохнуть.',
    ],
    'Лев' => [
        'Сегодня' => 'Гороскоп для Льва на сегодня: Сегодня ваш день будет ярким и креативным. Займитесь искусством или хобби.',
        'Завтра' => 'Гороскоп для Льва на завтра: Завтра посвятите время своей семье и близким.',
    ],
    'Дева' => [
        'Сегодня' => 'Гороскоп для Девы на сегодня: Сегодня старайтесь быть организованными и эффективными в работе.',
        'Завтра' => 'Гороскоп для Девы на завтра: Завтра уделите внимание своему здоровью и благополучию.',
    ],
    'Весы' => [
        'Сегодня' => 'Гороскоп для Весов на сегодня: Сегодня старайтесь найти баланс между работой и личной жизнью.',
        'Завтра' => 'Гороскоп для Весов на завтра: Завтра поддерживайте гармонию в отношениях с окружающими.',
    ],
    'Скорпион' => [
        'Сегодня' => 'Гороскоп для Скорпиона на сегодня: Сегодня вы будете стремительны и амбициозны. Добивайтесь своих целей.',
        'Завтра' => 'Гороскоп для Скорпиона на завтра: Завтра уделите внимание финансовым вопросам.',
    ],
    'Стрелец' => [
        'Сегодня' => 'Гороскоп для Стрельца на сегодня: Сегодня откройтесь новым опытам и приключениям.',
        'Завтра' => 'Гороскоп для Стрельца на завтра: Завтра подумайте о своих долгосрочных планах.',
    ],
    'Козерог' => [
        'Сегодня' => 'Гороскоп для Козерога на сегодня: Сегодня уделите внимание своим обязанностям и работе.',
        'Завтра' => 'Гороскоп для Козерога на завтра: Завтра старайтесь сбалансировать свои личные и профессиональные интересы.',
    ],
    'Водолей' => [
        'Сегодня' => 'Гороскоп для Водолея на сегодня: Сегодня у вас будет творческое мышление и вдохновение.',
        'Завтра' => 'Гороскоп для Водолея на завтра: Завтра общение и социальные активности будут важными.',
    ],
    'Рыбы' => [
        'Сегодня' => 'Гороскоп для Рыб на сегодня: Сегодня уделите внимание своим интуитивным и духовным сторонам.',
        'Завтра' => 'Гороскоп для Рыб на завтра: Завтра уделите внимание заботе о себе и своем здоровье.',
    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST["birthdate"];
    $zodiac_sign = determineZodiacSign($birthdate);

    if ($zodiac_sign) {
        $current_date = date("d.m.Y");
        echo "Ваш знак зодиака: $zodiac_sign<br>";
        echo "Гороскоп на сегодня для знака $zodiac_sign: " . $horoscopes[$zodiac_sign]['Сегодня'];
    } else {
        echo "Неверная дата рождения или не удалось определить знак зодиака.";
    }
}

// Функция для определения знака зодиака по дате рождения
function determineZodiacSign($birthdate)
{
    $month_day = date("m-d", strtotime($birthdate));

    if (($month_day >= "03-21" && $month_day <= "04-19")) {
        return "Овен";
    } elseif (($month_day >= "04-20" && $month_day <= "05-20")) {
        return "Телец";
    } elseif (($month_day >= "05-21" && $month_day <= "06-20")) {
        return "Близнецы";
    } elseif (($month_day >= "06-21" && $month_day <= "07-22")) {
        return "Рак";
    } elseif (($month_day >= "07-23" && $month_day <= "08-22")) {
        return "Лев";
    } elseif (($month_day >= "08-23" && $month_day <= "09-22")) {
        return "Дева";
    } elseif (($month_day >= "09-23" && $month_day <= "10-22")) {
        return "Весы";
    } elseif (($month_day >= "10-23" && $month_day <= "11-21")) {
        return "Скорпион";
    } elseif (($month_day >= "11-22" && $month_day <= "12-21")) {
        return "Стрелец";
    } elseif (($month_day >= "12-22" && $month_day <= "01-19")) {
        return "Козерог";
    } elseif (($month_day >= "01-20" && $month_day <= "02-18")) {
        return "Водолей";
    } elseif (($month_day >= "02-19" && $month_day <= "03-20")) {
        return "Рыбы";
    }
    return false;
}
?>
<h1>Определите свой гороскоп</h1>
<form method="post">
    <label for="birthdate">Введите дату рождения:</label>
    <input type="date" name="birthdate" required>
    <input type="submit" value="Получить гороскоп">
</form>