<?php
    // • Genera un número aleatorio entre dos números. Asegurarte de que los parámetros son numéricos.
    function generar(int $num1, int $num2) : float {
        return rand($num1, $num2);
    }

    /* • Función que nos devuelva el factorial de un número. En este caso, debes gestionar 
    dentro de la función que si el dato introducido no es numérico sacar mensaje de
    advertencia */
    function factorial(int $num) : int {
        // comprobamos que el parametro es numerico
        if (!is_numeric($num)) {
            return "El parametro debe ser un numero";
        }
        // calculamos el factorial, multiplica por cada numero desde el mismo hasta el 1
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial = $i * $factorial;
        }

        return $factorial;
    }

    /* • Generar una letra aleatoria, ya sea mayúsculas o minúsculas. */
    function letra() : String {
        //0 generara mayuscula, 1 minuscula
        $mayusMinus = rand(0,1);

        if ($mayusMinus == 0) {
            //genera letra minuscula, en ascii son de 65 a 90
            return chr(rand(65,90));
        } else {
            //genera letra mayuscula, en ascii son de 97 a 122
            return chr(rand(97,122));
        }
    }

    /* • Crear un select con opciones a partir de un array, por ejemplo, de ciudades:
    Nota: Gestiona dentro de la función todas las posibilidades de error en caso contrario
    sacar mensaje de advertencia. */

    function generarSelect($array) {
        //si el array no es un array, o si es vacio
        if (!is_array($array) || empty($array)) {
            return "Introduce un array no vacío.";
        }

        //miramos en cada objeto del array pasado
        foreach ($array as $objeto) {
            //si cada objeto no es un array, o si no tiene dos valores
            if (!is_array($objeto)) {
                return "Todos los elementos tienen que ser arrays.";
            }
            if (count($objeto) !== 2) {
                return "Cada array debe tener exactamente 2 valores.";
            }
        }

        //creamos el select
        echo "<select>";
        //por cada array generamos esta linea pero con los objetos del array:
        //<option value='1'>Madrid</option>
        foreach($array as $objeto) {
            echo "<option value='$objeto[0]'>$objeto[1]</option>";
        }
        echo "</select>";
    }

    /* • Crear un select con los años entre los años que les indiquemos. Los años en el select
    siempre deben ir ordenados de mayor a menor. A parte, haz las comprobaciones
    habituales de posibles errores. */

    function generarSelectAños($num1, $num2) {
        //comprobamos que se pasen parametros numericos
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return "Los años tienen que ser numericos.";
        }

        echo "<select>";
        //hacemos un for que recorra desde el primer numero hasta el segundo
        //por cada uno imprimimos el option value  
        for ($i = $num1; $i <= $num2; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        echo "</select>";
    }
?>