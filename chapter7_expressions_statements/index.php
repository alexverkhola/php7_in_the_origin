<?php

// Easy expression:
$a = 5;
// echo $a;

$a = $b = 10;
// echo $a, $b;

@$a = 3 * sin($b = $c + 10) + $d;
// echo $a;

$a = 1 + NULL;
// echo $a;

$a = 10 * 20;
$b = "" . (10 * 20);
// echo "$a : " . gettype($a) . " $b : " . gettype($b);

$less = 10 < 5;
// echo $less;

$equals = 10 == 10;
// echo $equals;

$between = 2 >= 1 && 3 <= 3;
// echo $between;

$x =  '' || null;
// echo $x;

$multiple = "This is 
    long string";
// echo $multiple;

$multiple = 'This is another 
    long string';
// echo $multiple;

$str = 'An apostrof \' writting as \\\', and slash \\ writing as \\\\.';
// echo $str;

$SOME = "He";
// echo $SOME . "llo" . ", " . "world!";
// echo "<p> {$SOME}llo" . ", " . "world! </p>";
// echo "<p> ${SOME}llo" . ", " . "world! </p>";

$action = array(
    "left" => "survive",
    "right" => "Kill'em all",
);
// echo "$action[left] <br />";
// echo "{$action['left']} <br />";
// echo "{$action[left]} <br />";

$importantString = "<b>Очень важный жирный текст</b>";
$text = <<<MARKER
Это Here документ.
Здесь можно вставлять любой текст,
Даже очень важный, и даже с тегами как ниже:
$importantString
<h6>А этот заголовок h6</h6>
как то так.
MARKER;
// echo $text;

$text = <<<'MARKER'
Это NOW документ.
<h6>Здесь работают теги</h6>
Но переменные не интерполируются:
<p>$importantString</p>
Вот так вот.
MARKER;
// echo $text;
// echo $text[0];

$cmd = `ls && pwd`;
// echo "Сейчас я вызову команду ОС `ls && pwd` $cmd ";

$a = 10;
$b = ++$a;
// echo $b;


$compare = 1 == true;
// echo $compare;

$compare = 1 === true;
// echo $compare;

$a = 1;
$b = 10 - 9;
$compare = $a === $b;
// echo $compare;

$a = 1;
$b = 2;
for($i = 0; $i < 3; $i++) {
    $compare = $a <=> $b;
    // echo $compare . "  ";
    $a++;
}

$x = -17;
$x = $x < 0 ? -$x : -$x;

// echo $x;

$a = null;
$b = 0;
$c = 1;

$result = $b ?? $c;
// echo $result;








?>