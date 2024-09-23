<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Desarrollo web con PHP</title>
        <meta name="description" content="PHP">
        <meta name="author" content="Daniel">
    </head>
    <body>
        <h1>Tema 1: Actividad 4</h1>
        <?php
        //integramos el archivo de funciones
        include("funciones.php");

        //llamada a la función generar
        $numAleatorio = generar(10, 5);
        echo "El número generado entre 5 y 10 es: $numAleatorio <br>";

        //lamada a la funcion factorial
        $factorial = factorial($numAleatorio);
        echo "El factorial de $numAleatorio es: $factorial <br>";

        //llamada a la función letra
        $letra = letra();
        echo "La letra generada es: $letra <br>";

        $array = [
            [1, "Madrid"],
            [2, "Nueva York"],
            [3, "Londres"],
            [4, "Barcelona"]
            ];

        //llamada a generarSelect
        $select = generarSelect($array);
        echo "$select <br>";

        //para probar los manejos de errores
        $arrayVacio = [];
        $array1Elemento = ["Madrid", [1, "Nueva York"]];

        $select2 = generarSelect($array1Elemento);
        echo "$select2 <br>";

        $select3 = generarSelect($arrayVacio);
        echo "$select3 <br>";

        //llamada a generarSelectAños
        $selectAños = generarSelectAños(1999, 2018);

        //para probar los manejos de errores
        $selectAños = generarSelectAños("Hola", "Test");
        ?>
    </body>
</html>