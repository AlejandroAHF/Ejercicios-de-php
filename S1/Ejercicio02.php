<!DOCTYPE html>
<html>
<head>
    <title>Numeros Primos</title>
</head>
<body>
    <h2>Numeros Primos</h2>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit">Generar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $num = $_POST['numero'];

            function esPrimo($num){
                //comprobamos si el numero no es primo
                if ($num <= 1) {
                    return "<p>El numero $num no es primo</p>";
                }

                // Verificar divisibilidad desde 2 hasta la raíz cuadrada del número
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        return "<p>El numero $num no es primo</p>"; // No es primo si es divisible por cualquier número en este rango
                    }
                }

                //si no se cumplen las condiciones anteriores quiere decir que es un numero primo
                return "<p>El numero $num es primo</p>";
            }

            $resultado = esPrimo($num);
            echo $resultado;
        }
    ?>
</body>
</html>