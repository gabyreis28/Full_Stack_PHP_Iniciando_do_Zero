<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h3>Olá Mundo! </h3>";

echo "<p>Olá Mundo!", "", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$hello = "olá mundo";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";

//sem interpretação
echo '<p>$hello</p>';

//variavél protegida 
$day = "dia";
echo "<p>Falta 1 $day para o evento! </p>";
echo "<p>Faltam 2 {$day}s para o evento! </p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

echo "<h3>" . $hello . "" . $code . "</h3>";
?>
HTML

<!--sem interpretação -->
<h4>$hello</h4>

<!-- atalho de " ?php echo "-->
<h4> <?= $hello; ?> <?= $code; ?></h4>

<h4> <?= "{$hello}  {$code}" ?></h4>

<?php



/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

// print é utilizado para exibir apenas String 

print $hello;
print $code;

print "<br><br> {$hello} {$code}";


print "<h3>{$hello} {$code}</h3>";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

// return para manter os dados
//print_r é para exibir lista

$array = [
  "company" => "UpInside",
  "course" => "FSPHP",
  "Class" => "Comandos de saída"
];

print_r($array);

echo "<pre>", print_r($array),  "</pre>";

//apenas exibir array dando um return colocando "true"
echo "<pre>", print_r($array, true),  "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

//printf serve para dar saída em uma váriavel formatada.
//template de um artigo e exibir esse artigo para o usuário.

// %s = sao entradas de valores para que possa substituir.
$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";


printf($article, $title, $subtitle);

//virando um return
echo sprintf($article, $title, $subtitle);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
// vprintf faz a mesma coisa que o printf porem utiliza um array para fazer a substituição

//com base no exemplo á cima 
// $array = [
//   "company" => "UpInside",
//   "course" => "FSPHP",
//   "Class" => "Comandos de saída"
// ];

//$company formato do template 
$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";

vprintf($company, $array);

echo vsprintf($company, $array);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($array);

echo "<br><br>";
// var_dump por linha 
var_dump(
  $array,
  $hello,
  $company
);