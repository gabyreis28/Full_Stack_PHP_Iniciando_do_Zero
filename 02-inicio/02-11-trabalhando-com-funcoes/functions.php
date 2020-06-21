<?php

//definir todos os dados obrigatorio ao passar os valores no parametros
function functionName($arg1, $arg2, $arg3)
{
  $body = [$arg1, $arg2, $arg3];
  return  $body;
}

//Para  definir a prioridades dos dados no parametros é necessário primeiro passar o argumentos obrigatorios, depois os importantes(valor padrão) e por ultimo os opcionais 
function optionArgs($arg1, $arg2 = true, $arg3 = null)
{
  $body = [$arg1, $arg2, $arg3];
  return  $body;
}

function calcIMC()
{
  global $peso;
  global $altura;

  return $peso / ($altura * $altura);
}

function playTotal($price)
{
  static $total;
  $total += $price;
  return "<p>O total a pagar é R$" . number_format($total, "2", ",", ".") . "</p>";
}

function myTeam()
{
  $teamNames = func_get_args(); //pegando argumentos
  $teamCount = func_num_args(); //contando argumentos
  return ["members" => $teamNames, "count" => $teamCount];
}