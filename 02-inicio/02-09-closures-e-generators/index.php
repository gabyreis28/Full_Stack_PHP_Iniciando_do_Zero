<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
//closures: funções anônimas, para executar trechos de codigos que possa ser repetido dentro da aplicação

$myAge = function ($year) {
  $age = date("Y") - $year;
  return "<p>Você tem {$age} anos!</p>";
};

echo $myAge(1986);
echo $myAge(2004);
echo $myAge(1998);
echo "<br><b>";

$priceBrl = function ($price) {
  return "R$" .  number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa {$priceBrl(3600)}.Vamos fechar? <br><br></p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
  $myCart[$item] = $qtd * $price;
  $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 497);
$cardAdd("JQuery", 2, 497);

var_dump($myCart);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
//generators:facilita para registro que utilizar muito recurso de memoria, generators otimiza a sobrecarda do uso da memoria

$iterator = 4000000;

//sem o uso do generators
function showDates($days)
{

  $saveDate = [];
  for ($day = 1; $day < $days; $day++) {
    $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
  }
  return $saveDate;
}

echo "<div style='text-align:center'>";
foreach (showDates(0) as $date) {
  echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}

echo "</div>";


//com o uso do generators - sem aloca na memoria
function generatorDate($days)
{
  for ($day = 1; $day < $days; $day++) {
    yield date("d/m/y", strtotime("+{$day}days")); //yield:retornando valor
  }
}

echo "<div style='text-align:center'>";
foreach (generatorDate($iterator) as $date) {
  echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}