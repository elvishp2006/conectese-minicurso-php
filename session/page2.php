<?php

session_start();

echo '<p>Bem vindo a página #2</p>';

echo "<p>{$_SESSION['color']}</p>";
echo '<p>' . date( 'd/m/Y H:i:s', $_SESSION['time'] ) . '</p>';

echo '<p><a href="page1.php">Página 1</a></p>';