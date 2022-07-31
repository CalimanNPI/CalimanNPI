<?php

$message = 'hi! carlós! con';

//Longitud en bytes
echo strlen($message) . '<br>';

//Longitud tamaño
echo mb_strlen($message) . '<br>';

//Numero de palabras 
echo str_word_count($message) . '<br>';

//Reversa
echo strrev($message) . '<br>';

//Encontrar texto izquierda a derecha
echo strpos($message, '!') . '<br>';

//derecha a izquierda
echo strrpos($message, '!') . '<br>';

//Rempalzar texto
echo str_replace('!', ':)', $message) . '<br>';

//Minúsculas
echo strtolower($message) . '<br>';

//Mayúsculas
echo strtoupper($message) . '<br>';

//Mayúsculas la primera letra
echo ucfirst($message) . '<br>';

//Mayúsculas la primera letra de cada palabra
echo ucwords($message) . '<br>';

//Comparar cadenas  el resultado es 0 son iguales ya que se compara su tamaño en bits boolean
echo strcmp('a', 'a') . '<br>';

//Comparar cadenas sin importar el tipo boolean
echo strcasecmp('a', 'A') . '<br>';

//Subtraer cadena 
echo strstr($message, 16, 14) . '<br>';

//Remover espacios en blanco 
echo trim(' asd       asd         aas     asd') . '<br>';

//buscar cadena dentro de una cadena boolean
echo str_contains($message, "con") . '<br>';

//sabr si la cadena comienza con una determinada palabra boolean
echo str_starts_with($message, "hi") . '<br>';

//sabr si la cadena comienza con una determinada palabra boolean
echo substr($message, -2) . '<br>';
echo substr($message, 1, 5) . '<br>';
echo substr($message, 1) . '<br>';


//interpolación
echo "es un texto $message" . '<br>';

//escapar caracteres
echo "ex un texto \$messaje" . '<br>';
echo "ex un texto \"messaje\"" . '<br>';

//Operadores aritméticos + - * / % **
$x = 5;
$y = 10;

echo $x % $y; //residuo de la division
echo $x ** $y; //potencia 

//Operadores de asignación
echo $x += $y; //potencia 
echo $x -= $y; //potencia 
echo $x *= $y; //potencia 
echo $x /= $y; //potencia 

//Operadores de comparación
var_dump($x == $y); //igual 
var_dump($x === $y); //igual del mismo tipo 
var_dump($x <= $y); // menor
var_dump($x >= $y); // mayor
var_dump($x <> $y); // diferente
var_dump($x != $y); // no es igual
var_dump($x !== $y); // 

//Operadores de incremento, decremento 
$x--; //antes 
--$x; //despues

//condicional if
if ($x <= $y) {
    echo 'menor' . '<br>';
} elseif ($x >= $y) {
    echo 'mayor' . '<br>';
}



//Arrays unidimensionales
$array = array(
    'pop0',
    'pop1',
);

$array = [
    'pop0',
    'pop1',
];
for ($i = 0; $i < count($array); $i++) {
    if ($i === 3) {
        unset($array[$i]);
        //salir de un bucle y continuar con las demas actividades
        break;
        //continuar con el bucle 
        //continue;
        //terminar proceso
        //exit();
    }
    echo "Count: " . count($array) . " - Position: " . $i . "<br>";
}

$edades = array('carlos' => 25, "jose" => 18);

foreach ($edades as $key => $value) {
}

//Arrays multidimensionales
$array = [
    [
        'nmbre' =>  'pop0',
        'dos' => 'pop1',
        'uno' => 'pop2',
        'tres' =>   [
            'nmbre' =>  'pop0',
            'dos' => 'pop1',
        ]
    ],
    [
        'nmbre' => 'pop0',
        'dos' =>  'pop1',
        'uno' => 'pop2',
    ],
    [
        'nmbre' => 'pop0',
        'uno' =>  'pop1',
        'dos' =>  'pop2',
    ]
];


echo $array[2]['nmbre'] . '<br>';


//llenar el array
$array = range(10, 20);
var_dump($array) . '<br>';

//cuenta el contenido
echo count($array) . '<br>';


echo in_array(12, $array) ? 'true' : 'false';
echo '<br>';


//acceder a las variables globales
$a = 5;
function suma()
{
    global $a;
    return $a + 5;
}

$a = suma();
echo $a . '<br>';


//url
$url = 'recibir.php?tipo_usuario=nuevo&navegador=chrome';

//método get
//echo $_GET['tipo_usuario'];

//método post
//echo $_POST['usuario'];

//método 
echo $_REQUEST['usuario'] . '<br>';
$img =  $_FILES['img'];
$pathc = $_SERVER['DOCUMENT_ROOT'] . '/CalimanNPI-main/img/' . $img['name'];
move_uploaded_file($img['tmp_name'], $pathc);

echo $pathc;


//valida formulario

/*if (isset($_POST['usuario'])) { //Determine if a variable is declared and is different than NULL
}*/


//include('pruebas.php'); //muestra en contenido aunque tenga algon error
//require('pruebas.php'); //no carga el contenido si existe algin error 
//require_once('pruebas.php'); //no carga el contenido si existe algin error 


//dentro de la vista se hace un require y me llama a la function
//include_once('operaciones.php');
//multiplicar();

//esto es otro archivo php
function multiplicar()
{
    /*if (isset($_POST['num1'])) {
        return; #suma;
    }*/
}

//Fechas
/**
 * d - día
 * m - mes
 * a - año
 * l - dia del mes
 * 
 * h - horas 1 a 12 formato
 * i - minutos
 * s - segundos
 * a - pm-am
 */
echo date('h:i:sa') . '<br>';
echo date('d/m/y') . '<br>';



//private, public, protected, static, const, global, 


function Valoracion($nombre, $rating = 5)
{
    echo "El $nombre tiene un rating de $rating" . '<br>';
}

function concatenar(...$palabras)
{
    $resultado = '';
    foreach ($palabras as $palabra) {
        $resultado = $resultado . $palabra . '';
    }
    echo $resultado . '<br>';
}

concatenar('hola', 'me', 'llamo', 'pedro');


//se declara el tipo de retorno, y el tipo de valor 
function sumaEnteros(int $num1, int $num2): int|float
{
    return $num1 + $num2;
}

echo sumaEnteros(1, 1) . '<br>';
