<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if ($test) {
  var_dump(true);
} else {
  var_dump(false);
}
echo "<br><br>";

$age = 60;

if ($age < 20) { // age for menor que 20
  var_dump("Bandas Coloridas");
} else if ($age > 20 && $age < 50) { //se age for maior q 20 E age for menor que 50
  var_dump("Ótimas Bandas");
} else {
  var_dump("Rock And Roll Raiz");
}
echo "<br><br>";


$hour = 24;

if ($hour >= 5 && $hour < 23) { //hour form maior e igual a 5 OU hour for maior que 23
  if ($hour < 7) { //hour for maior que 7
    var_dump("Bob Marley");
  } else {
    var_dump("After Bridge");
  }
} else {
  var_dump("ZzzzzzZZZZZ");
}


/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);
//isset: verifica se existe a variavel, se é existente 

$rock = "";
// $rock = null;
// $rock = null;

if (isset($rock)) { //existe a váriavel rock
  var_dump("Sim, existe a váriavel Rock");
}

echo "<br><br>";

if (!isset($rock)) { //não existe a váriavel $rock
  var_dump("Não possue variável existente <br><br> ");
} else {
  var_dump("Variável existente...Rock And Roll !! <br><br> ");
}

$rockAndRoll = "AC/DC";
if (empty($rockAndRoll)) { // se a variavel estiver vazia  
  var_dump("Rock existe e toca {$rockAndRoll} <br><br>");
} else {
  var_dump("Não existe, valor vazia ! <br><br>");
}

$rockAndRoll = "AC/DC";
if (!empty($rockAndRoll)) { // se a variavel não estiver vazia 
  var_dump("Rock existe e toca {$rockAndRoll}");
} else {
  var_dump("Não existe, valor vazia !");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);
//switch: para status

$playment = "past_due";

switch ($playment) {

  case "billet_printed":
    var_dump("Boleto Impresso");
    break;

  case "canceled":
    var_dump("Pagamento Cancelado");
    break;

  case "past_due":
  case "pending":
    var_dump("Aguardando Pagamento");
    break;

  case "approved":
  case "completed":
    var_dump("Pagamento aprovado");
    break;

  default:
    var_dump("Erro ao processar pagamento!");
    break;
}