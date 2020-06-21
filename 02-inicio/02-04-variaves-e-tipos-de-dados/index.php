<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Gabi";
$userLastName = "Reis";
echo "<h3>{$userFirstName} {$userLastName} </h3>";

$user = $userFirstName;
$user_last = $userLastName;
echo "<h3>{$user} {$user_last} </h3>";

$userAge = "23";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'> tem {$userAge} anos</span></p>";

$userEmail = "<p>cursos@upinside.com.br</p>";
echo $userEmail;

// variável variável recebe a chave com o valor da própria variável
$company = "UpInside";
$$company = "Treinamentos";
//variavel UpInside tem o valor de treinamentos
echo "<h3>{$company} {$UpInside}</h3>";

// copiar valores atraves da suas referencias
$calcA  = 10;
$calcB = 20;
$calcB = &$calcA; // referenciando  a variavel calcA, ambas tem o mesmo valor que serám alteradas 
$calcB = 100;

echo "<pre>", var_dump([
  "a" => $calcA,
  "b" => $calcB
]), "</pre>";


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);
echo "<br><br>";

$bestAge = ($userAge > 20);
var_dump($bestAge);
echo "<br><br>";

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if ($a || $b || $c || $d || $e) {
  var_dump(true);
} else {
  var_dump(false);
}
//resultado é false por ser um valor " 0 e vazio " é interpretado como false.


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

// callback variável que retorna uma rotina ou um valor

$code = "<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code); //remover tags
var_dump($code);
echo "<br><br>";
var_dump($codeClear);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "olá mundo";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 123;
$float = 1.5454;
var_dump([
  $string,
  $array,
  $object,
  $null,
  $int,
  $float
]);