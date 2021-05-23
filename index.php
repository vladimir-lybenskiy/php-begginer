<?php

//створення змінних

$a = true;    // Значение Boolean
$int = 100;    // Значение Integer
$string = "Переменная содержит текст";    // Значение String
$string2 = "5425";    // Значение String, так как число взято в кавычки !
$float = 44.122;    // Значение Float

$arr = array("php", "html", "css");

$arr1 = array("first" => "php", "second" => "html", "third" =>array('sass','less') );
echo ($arr1['third'][0]);


echo('<br><hr>');

$a1="12345";


echo "qwe{$a1}rty"; //// qwe12345rty, використовуючи фігурні дужки
echo('<br><hr>');
echo "qwe" . $a1 . "rty"; // qwe12345rty, використовується конкатенація
echo('<br><hr>');
// Does not work:
echo 'qwe{$a1}rty'; // Не працює:
echo('<br><hr>');
// qwe {$ a} rty, одинарні лапки не аналізуються
echo "qwe$arty"; // qwe, оскільки $ a став $ arty, що не визначено
echo('<br><hr>');


echo "2 + 2 = ", 2 + 2, "<br>";
echo('<br><hr>');
echo "5 - 2 = ", 5 - 2, "<br>";
echo('<br><hr>');
echo "10 * 10 = ", 10 * 10, "<br>";
echo('<br><hr>');
echo "100 / 2 = ", 100 / 2, "<br>";
echo('<br><hr>');
echo "10 % 2 = ", 10 % 2, "<br>";
echo('<br><hr>');
$speed = 80;

if ($speed > 60)
{    // Начало
  echo "Превышение скорости! <br>";
  echo "Пожалуйста, уменьшите скорость!";
}
echo('<br><hr>');

for ($i = 0; $i < 10; $i++)
{
   echo "Вывод строки. 10 раз <br>";
}


echo('<br><hr>');
$array = array ("Apple", "Limon", "Chery", "Oranges");

foreach ($array as $value)
{
   echo "Вы выбрали фрукт - $value <br>";
}



echo('<br><hr>');
function square($num)
{
   $square = $num * $num;
   echo $square;
}

square(7);



$a = array(12.23, 42.554, 58.234, 34.31);
echo max($a);
?>