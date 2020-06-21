<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);
$arrA = [0, 1, 2, 3];
var_dump($arrA);
echo "<br><br>";

$arrayIndex = [
  "Brian",
  "Angus",
  "Malcolm"
];

//adicionando um novo arrayIndex após de setas as listas, sem ter que rescrever-los
$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);
echo "<br><br>";
/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

//associative array: definir qual key para acessar determinado valor 

$arrayAssoc = [
  "vocal" => "Brian",
  "solo_guitar" => "Angus",
  "base_guitar" => "Malcolm",
  "bass_guitar" => "Cliff",
];

//adicionando um novo $arrayAssoc após de setas as listas, sem ter que rescrever-los
$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_band"] = "AC/DC";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"]; //array Index
$angus = [
  "name" => "Angus",
  "instrument" => "Guitar",
]; // array associative

//array multidimensional 
$instruments = [
  $brian,
  $angus,
];

var_dump($instruments);
echo "<br><br>";

var_dump([
  "brian" => $brian,
  "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

//formas de abrir o array e interpretar os dados 

$acdc = [
  "band" => "AC/DC",
  "vocal" => "Brian",
  "solo_guitar" => "Angus",
  "base_guitar" => "Malcolm",
  "bass_guitar" => "Cliff",
  "drums" => "Phil",
];

echo "<p> O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com {$acdc["solo_guitar"]} fazem um ótimo show de rock. </p>";

echo "<br><br>";

$pearl = [
  "band" => "Pearl Jam",
  "vocal" => "Eddie",
  "solo_guitar" => "Mike",
  "base_guitar" => "Stone",
  "bass_guitar" => "Jeff",
  "drums" => "Jack",
];

$rockBands = [
  "acdc" => $acdc,
  "pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam']['vocal']}</p>";
echo "<br><br>";

//listando todos os valores da key da "array acdc"
foreach ($acdc as $item) {
  echo "<p>{$item}</p>";
}
echo "<br><br>";

//listando todos os valores e a keys da "array acdc"
foreach ($acdc as $key => $value) {
  echo "<p><b>{$value}</b> is a <b>{$key}</b> of band!</p>";
}
echo "<br><br>";

foreach ($rockBands as $rockBand) {
  var_dump($rockBand);
  $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
  vprintf($art, $rockBand);
}

// echo "<p></p>";