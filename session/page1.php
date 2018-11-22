<?php

session_start();

echo 'Bem vindo a página #1';

$_SESSION['color'] = 'green';
$_SESSION['time']  = time();

echo '<br /><a href="page2.php">Página 2</a>';