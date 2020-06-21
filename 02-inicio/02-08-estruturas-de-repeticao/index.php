<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);
//while: enquanto algo for VERDADEIRO FAÇA!

$looping = 1;
$while = [];

while ($looping <= 4) { //enquando for menor e igual a 5 faça
  $while[] = $looping; //$while[]: para acessar em um index

  $looping++; //decremento
}

var_dump($while);
echo "<br><br>";

//do while: execute algo e depois faz a validação se for VERDADEIRO 

$looping = 5;
$while = [];

do {
  $while[] = $looping; //$while[]: para acessar em um index

  $looping--; //incremento
} while ($looping >= 1);

var_dump($while);


/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for ($i = 1; $i <= 5; $i++) {
  echo "<p>{$i}</p>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for ($c = 1; $c <= 10; $c++) {
  if ($c % 2 == 0) {
    continue;
  }

  if ($c > 7) {
    break;
  }

  echo "<p>Pulou +2 :: {$c} </p>";
}

echo "<br><br>";

for ($c = 1; $c <= 10; $c++) {
  if ($c % 2 == 1) {
    continue;
  }

  if ($c > 10) {
    break;
  }

  echo "<p>Pulou +2 :: {$c}</p>";
}



/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

// $array = [];

for ($ar = 0; $ar <= 3; $ar++) {
  $array[] = $ar;
}

var_dump($array);
echo "<br><br>";

foreach ($array as $item) {
  var_dump($item);
}

echo "<br><br>";

foreach ($array as $key => $value) {
  var_dump("{$key} = {$value}");
}