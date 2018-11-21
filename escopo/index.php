<?php
$a = 'Hello World';

echo "Variável 'a' em index.php: {$a}\n";

function testaEscopoLocal() {
    echo "Variável 'a' em testaEscopoLocal: $a\n";
}

function testaEscopoGlobal() {
    global $a;
    echo "Variável 'a' em testaEscopoGlobal: $a\n"; #Também pode ser usado como $GLOBALS['a']
}

function testaStatic() {
    static $a = 0;
    echo 'Variável \'a\' em testaStatic: ' . $a . "\n";
    $a++;
}

testaEscopoLocal();
testaEscopoGlobal();
testaStatic();
testaStatic();
include 'incluido.php';
?>