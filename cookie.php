<?php
if ( isset( $_GET['set-biscoito'] ) ) {
    setcookie('biscoito', 'Bolacha');
}

if ( isset( $_GET['unset-biscoito'] ) ) {
    unset( $_COOKIE['biscoito'] );
}

if ( ! empty( $_COOKIE['biscoito'] ) ) {
    echo '<p>O valor do cookie biscoito é: ' . $_COOKIE['biscoito'] . '</p>';
}
?>

<form method="GET">
    <input type="submit" name="set-biscoito" value="Set biscoito">
    <input type="submit" name="unset-biscoito" value="Unset biscoito">
</form>