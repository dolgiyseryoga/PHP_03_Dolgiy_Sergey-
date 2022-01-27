<!DOCTYPE html>
<html lang="en,ru">

<head>
    <meta charset="UTF-8">

    <title></title>
</head>

<body>
    <?php
    // 
    echo '<strong style=color:green> 1 Zadacha </strong><br \>';
    function cub($a)
    {
        return sqrt($a);
    }
    echo cub(25);
    echo '<hr \>';
    //
    echo '<strong style=color:green> 2 Zadacha </strong><br \>';
    function sum($a, $b)
    {
        return $a + $b;
    }
    echo sum(2, 5);
    echo '<hr \>';
    //
    echo '<strong style=color:green> 3 Zadacha </strong><br \>';
    function day($a)
    {
        switch ($a) {
            case '1':
                echo 'Понедельник';
                break;
            case '2':
                echo 'Вторник';
                break;
            case '3':
                echo 'Среда';
                break;
            case '4':
                echo 'Четверг';
                break;
            case '5':
                echo 'Пятница';
                break;
            case '6':
                echo 'Суббота';
                break;
            case '7':
                echo 'Воскресенье';
                break;
        }
    }
    echo day(7);
    echo '<hr \>';
    //
    echo '<strong style=color:green> 4 Zadacha </strong><br \>';
    function char($e)
    {
        if ($e < 0) {
            echo 'true';
        }
        if ($e > 0) {
            echo 'false';
        }
        if ($e == 0) {
            echo '0 - это нейтральная полоса между государствами полож. и отриц. чисел.';
        }
    }
    echo char(-7);
    echo '<hr \>';
    //
    echo '<strong style=color:green> 5 Zadacha </strong><br \>';


    function getDigitsSum($digit)
    {
        $sum = array_sum(str_split($digit));
        echo $sum;
    }
    getDigitsSum(1235);
    echo '<hr \>';
    //
    echo '<strong style=color:green> 7 Zadacha </strong><br \>';
    function isEven($a)
    {
        if ($a % 2 == 0) {
            echo 'true';
        }
        if ($a % 2 !== 0) {
            echo 'false';
        }
    }
    echo isEven(0);
    echo '<hr \>';
    //
    echo '<strong style=color:green> 8 Zadacha </strong><br \>';   //help google
    function translit($title)
    {
        $alf = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '',    'ы' => 'y',   'ъ' => '',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '',    'Ы' => 'Y',   'Ъ' => '',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        );
        $title = strtr($title, $alf);
        $title = mb_strtolower($title);  // приводим строку к нижнему регистру
        $title = mb_ereg_replace('[^-0-9a-z]', '-', $title); //убираем все ненужные символы (заменяем их на "-")
        $title = mb_ereg_replace('[-]+', '-', $title);
        $title = trim($title, '-'); //убираем крайние "-"
        return $title;
    }
    echo translit("Курс по бек-энд веб-разработке");
    echo '<hr \>';
    //
    echo '<strong style=color:green> 10 Zadacha </strong><br \>';
    function Arr($Arr, $i = 0)
    {
        if (!empty($Arr[$i])) {
            echo $Arr[$i] . '<br />';
            $i++;
            echo Arr($Arr, $i);
        }
    }
    Arr([1, 2, 3, 4, 5, 8, 3, 7]);
    echo '<hr \>';
    // 
    echo '<strong style=color:green> 12 Zadacha </strong><br \>';
    function Speed($s, $t)

    {
        $V = $s / $t;
        echo $V . ' Км*/ч' . '<br />';
        echo floor($V / 3.6) . ' М/с';
    }

    Speed(80, 2); // Введите значения в километрах и время в часах
    echo '<hr \>';











    ?>
</body>

</html>