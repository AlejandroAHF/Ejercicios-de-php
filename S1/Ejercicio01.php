<!DOCTYPE html>
<html>
<head>
    <title>Generar Serie Fibonacci</title>
</head>
<body>
    <h2>Generar Serie Fibonacci</h2>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit">Generar</button>
    </form>

    <?php
        // Verificar si el formulario fue enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el número ingresado por el usuario
            $n = $_POST['numero'];

            // Función para generar la serie Fibonacci
            function generarFibonacci($n) {
                if ($n <= 0) {
                    return [];
                }
                
                $serie = [0];
                
                if ($n > 1) {
                    $serie[] = 1;
                }
                
                for ($i = 2; $i < $n; $i++) {
                    $serie[] = $serie[$i - 1] + $serie[$i - 2];
                }
                
                return $serie;
            }

            // Llamada a la función y mostrar el resultado
            $fibonacci = generarFibonacci($n);
            echo "<h3>Los primeros $n términos de la serie Fibonacci son:</h3>";
            echo "<p>" . implode(", ", $fibonacci) . "</p>";
        }
    ?>

</body>
</html>
