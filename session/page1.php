<?php

session_start();

echo '<p>Bem vindo a página #1</p>';

$_SESSION['color'] = 'green';
$_SESSION['time']  = time();

echo '<p><a href="page2.php">Página 2</a></p>';