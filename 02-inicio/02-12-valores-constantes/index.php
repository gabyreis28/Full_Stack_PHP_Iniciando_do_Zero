<?php

use Source\MyClass;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
//constantes: são imutavel, definidas.Sempre com letra maiscula

define("COURSE", "Full Stack PHP");
const AUTHOR = "Robson";

$information = true;
if ($information) {
  define("COURSE_TYPE", "Formação");
} else {
  define("COURSE_TYPE", "Curso");
}

// não consegue interpretar constante entre aspa simples,duplas ou protegendo as variáveis
echo "<p> COURSE_TYPE COURSE AUTHOR</p>";
echo "<p> {COURSE_TYPE} {COURSE} {AUTHOR}</p>";

//exibir as Constantes
echo "<p>", COURSE_TYPE, " ", COURSE, " de ", AUTHOR, "</p>";
echo "<p>" .  COURSE_TYPE . " " . COURSE .  " de " .  AUTHOR . "</p>";

//Para exibir uma "const" apenas dentro de uma class
class Config
{
  const USER = "root";
  const HOST = "localhost";
}
echo "<p>", Config::HOST, "</p>";
echo "<p>", Config::USER, "</p>";

//todas as constante  do php
var_dump(get_defined_constants(true));
//todas as minhas constantes
echo "<br><br>";
var_dump(get_defined_constants(true)["user"]);
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
//constantes mágicas: sempre utiliza " __ " para está insoladas

var_dump([
  __LINE__, //linha
  __FILE__, //caminho do arquivo
  __DIR__ //caminho do diretorio do arquivo raiz
]);
echo "<br><br>";

//Descobrir qual function está usando
function fullStackPHP()
{
  return __FUNCTION__;
}

var_dump(fullStackPHP());
echo "<br><br>";

//Descobrir trait
trait MyTrait
{
  public $traitName = __TRAIT__;
}

//Descobrir class
class FsPHP
{
  use MyTrait;
  public $className = __CLASS__;
}

var_dump(new FsPHP());
echo "<br><br>";


require __DIR__ . "/MyClass.php";
var_dump(new MyClass());
echo "<br><br>";
var_dump(MyClass::class);