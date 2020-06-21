<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
//include: para arquivos que não são essencial na aplicação.Incluir mais de um arquivo

// arquivos com funções/recursos/Configuraçõe não pode ser repetido.

include "File.php"; //não possue esse arquivo
echo "<p>Continue <br><br></P>";

// include "header.php";
include __DIR__ . "/header.php"; // caminho absoluto

$profile = new StdClass(); //vetor de dados para armazenar valores
$profile->name = "Ana";
$profile->company = "UpInside";
$profile->email = "curso@upinside.com.br";
include __DIR__ .  "/profile.php";

$profile->name = "Matheus";
$profile->company = "UpInside";
$profile->email = "curso@upinside.com.br";
include __DIR__ .  "/profile.php";

//include_once: incluir apenas uma vez o arquivo, do contrário não exibirá
$profile->name = "Matheus";
$profile->company = "UpInside";
$profile->email = "curso@upinside.com.br";
include_once __DIR__ .  "/profile.php";


/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
//require: para arquivos que são essencial na aplicação

//require_once: incluir apenas uma vez o arquivo, do contrário não exibirá

// arquivos com funções/recursos/Configuraçõe não pode ser repetido.


//require "File.php"; //não possue esse arquivo
//echo "<p>Continue <br><br></P>";

require __DIR__ . "/config.php";

// echo COURSE;
echo "<h1>" . COURSE . "</h1>";

require_once __DIR__ . "/config.php";