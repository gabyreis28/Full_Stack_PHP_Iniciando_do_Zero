<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
require __DIR__ . "/functions.php";

//todos os dados são obrigatorio passar os valores no parametros
var_dump(functionName("Pearl Jam", "AC/DC", "Alter Bridge"));
echo "<br><br>";


//DEFININDO PRIORIDADES DOS DADOS
//primeiros argumentos obrigatorios, segundo os importantes(valor padrão) e por ultimo os opcionais 

var_dump(optionArgs("Mariana"));
echo "<br><br>";
var_dump(optionArgs("Mariana", "Robson"));
echo "<br><br>";
var_dump(optionArgs("Mariana", "Robson", "Bianca"));
echo "<br><br>";

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);
//global access: ignora as definições de prioridades(escopo protegido da função) 

$peso = 86;
$altura = 1.83;

echo calcIMC();


/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
//static arguments: o valor vai se atualizando a cada nova execução

$play = playTotal(200);
$play = playTotal(150);
$play = playTotal(500);

echo $play;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);
//dinamic arguments: interpretar valores externo sendo passadas, sem criar as entradas

var_dump(myTeam("Maria", "Bianca", "José"));