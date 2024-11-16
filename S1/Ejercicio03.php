<!DOCTYPE html>
<html>
<head>
    <title>Verificar Palíndromo - Versión Fácil</title>
</head>
<body>
    <h2>¿Es un Palíndromo?</h2>
    <form method="post">
        <label for="texto">Ingrese una cadena de texto:</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Comprobar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el texto del formulario
        $texto = $_POST['texto'];

        // Función para verificar si una cadena es un palíndromo
        function esPalindromo($texto) {
            // Eliminar espacios y convertir a minúsculas
            $texto = strtolower(str_replace(' ', '', $texto));

            // Verificar si la cadena es igual a su reverso
            return $texto === strrev($texto);
        }

        // Mostrar el resultado
        if (esPalindromo($texto)) {
            echo "<p>$texto es un palíndromo.</p>";
        } else {
            echo "<p>$texto no es un palíndromo.</p>";
        }
    }
    ?>
</body>
</html>
