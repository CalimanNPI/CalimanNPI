<?php

$message = 'hi carlos!';

//Longitud
echo strlen($message) . '<br>';

//Numero de palabras 
echo str_word_count($message) . '<br>';

//Reversa
echo strrev($message) . '<br>';

//Encontrar texto
echo strpos($message, '!') . '<br>';

//Rempalzar texto
echo str_replace('!', ':)', $message) . '<br>';

//Minúnculas
echo strtolower($message) . '<br>';

//Mayúsculas
echo strtoupper($message) . '<br>';

//Comparar cadenas  el resultado es 0 son iguales ya que se compara su tamaño en bits
echo strcmp('a', 'a') . '<br>';

//Subtraer cadena 
echo strstr($message, 5, 2) . '<br>';

//Remover espacios en blanco 
echo trim(' asd       asd         aas     asd') . '<br>';



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
    echo 'menor';
} elseif ($x >= $y) {
    echo 'mayor';
}



$array = array(
    'pop0',
    'pop1',
    'pop2',
    'pop3',
    'pop4',
    'pop5',
    'pop6',
    'pop7',
    'pop8'
);
for ($i = 0; $i < count($array); $i++) {
    if ($i === 3) {
        unset($array[$i]);
    }
    echo "Count: " . count($array) . " - Position: " . $i . "<br>";
}

$edades = array('carlos' => 25, "jose" => 18);

foreach ($edades as $key => $value) {
}
//ciclo for
for ($i = 0; $i < strlen($message); $i++) {
}


//url
$url = 'recibir.php?tipo_usuario=nuevo&navegador=chrome';

//método get
echo $_GET['tipo_usuario'];

//método post
echo $_POST['usuario'];

//valida formulario

if (isset($_POST['usuario'])) { //Determine if a variable is declared and is different than NULL
}


include('asd.php'); //muestra en contenido aunque tenga algon error
require('asd.php'); //no carga el contenido si existe algin error 


//dentro de la vista se hace un require y me llama a la function
include('operaciones.php');
multiplicar();

//esto es otro archivo php
function multiplicar()
{
    if (isset($_POST['num1'])) {
        return; #suma;
    }
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
echo date('h:i:sa');
echo date('d/m/y');

//connection
$servidor = 'localhost';
$nombreUsuario = "root";
$password = '123';
$db = 'msq';
$conexion = new mysqli($servidor, $nombreUsuario, $password/**, $db*/);
if ($conexion->connect_error) {
    die('conexión fallida: ' . $conexion->connect_error);
}

echo ' se conecto';

$sql ="CREATE DATABASE listUsers";
if(!$conexion->query($sql)){
    die('Error al crear la DB:'.$conexion->error);
}
echo "base de datos crada correctamente...";

$sql = "CREATE TABLE uno(id INT(11) AUTO_INCREMENT PRIMARY KEY;
texto varchar(100),
timestamp TIMESTAMP)";
if(!$conexion->query($sql)){
    die('Error al crear la tabla:'.$conexion->error);
}

$sql= "SELECT * FROM uno";
$resultado = $conexion->query($sql);
if($resultado->num_rows>0){
while ($row = $resultado->fetch_assoc()) {
    echo $row['texto'];
}
}




















function contarVocales($cadena)
{
    $vocalesEncontradas = 0;

    $cadena = strtolower($cadena);
    $longitud = strlen($cadena);

    for ($indice = 0; $indice < $longitud; $indice++) {

        if (in_array($cadena[$indice], ["a", "e", "i", "o", "u"])) {
            $vocalesEncontradas++;
        }
    }
    return $vocalesEncontradas;
}

function factorial($num)
{
    if ($num < 1) {
        return 1;
    } else {
        return  $num * factorial($num - 1);
    }
}

function Fibonacci($number)
{

    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number - 1) +
            Fibonacci($number - 2));
}

$number = 10;
for ($counter = 0; $counter < $number; $counter++) {
    echo Fibonacci($counter), ' ';
}
