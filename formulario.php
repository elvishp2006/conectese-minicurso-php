<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <?php
        if ( ! empty( $_POST['texto'] ) ) {
            echo "<p>Você digitou: {$_POST['texto']}</p>";
            echo '<br>';
        }
        ?>

        <form method="POST" action="formulario.php">
            <label>
                Texto: <input type="text" name="texto" value="">
            </label>
            <br>
            <input type="submit" value="Enviar!">
        </form>
    </body>
</html>