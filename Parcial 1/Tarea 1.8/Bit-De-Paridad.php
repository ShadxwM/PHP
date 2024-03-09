<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <ul id="menu">
            <li><a href="Inicio.html">Inicio</a></li>
            <li><a href="Bit-De-Paridad.php">Bit de paridad</a></li>
            <li><a href="Autores.php">Autores</a></li>
            <li><a href="Adquisicion-De-Letras.php">Adquisición de Letras</a></li>
        </ul>
        <h1 class="papu">4352. Bit de paridad</h1>
        <table border=1 class="puntuacion">
            <tr>
                <td>Puntos</td>
                <td>12.68</td>
                <td>Límite de memoria</td>
                <td>32 MiB</td>
            </tr>
            <tr>
                <td>Límite de tiempo (caso)</td>
                <td>1s</td>
                <td>Límite de tiempo (total)</td>
                <td>1m0s</td>
            </tr>
            <tr>
                <td>Tamaño límite de entrada (bytes)</td>
                <td>10 KiB</td>
            </tr>
        </table>
        <h1>Descripcion</h1>
        <h4>
            Un <i>bit de paridad</i> es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. 
            Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método: <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp* Bit de paridad par. <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp* Bit de paridad impar. <br>
                En el caso de la <i>paridad par</i>, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. 
                Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.
                Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
        </h4>
        <h1>Entrada</h1>
        <h4>La entrada consiste de una sola línea con una secuencia de siete bits <i>0</i> o <i>1</i>.</h4>
        <h1>Salida</h1>
        <h4>La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.</h4>
        <h1>Ejemplo</h1>
        <h4>Entrada     &nbsp&nbsp&nbspSalida</h4>
        <table border="1">
            <tr>
                <td>1010001</td>
                <td>10100011</td>
                <td>El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete<br>bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
            </tr>
            <tr>
                <td>1101001</td>
                <td>11010010</td>
                <td>El número de bits con valor de 1 en la entrada es 4. La salida son los mismos siete<br>bits de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par.</td>
            </tr>
            <tr>
                <td>0000000</td>
                <td>00000000</td>
                <td>El número de bits con valor de 1 en la entrada es 0. La salida son los mismos siete<br>bits de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par (cero es un número par).</td>
            </tr>
            <tr>
                <td>1111111</td>
                <td>11111111</td>
                <td>El número de bits con valor de 1 en la entrada es 7. La salida son los mismos siete<br>bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
            </tr>
        </table>
        <form action="Bit-De-Paridad.php" method="post">
            Bit:
            <input type="text" name="bit"><br>
            <input type="submit" value="Enviar"><br>
        </form>
        <?php
            if($_POST)
            {
                $cadbit=$_POST['bit'];
                $cont=0;
                $n=strlen($cadbit);
                for($i=0; $i<$n; $i++)
                {
                    if($cadbit[$i]=='1')
                    {
                        $cont++;
                    }
                }
                if($cont%2==0)
                {
                    echo "El nuevo bit es: ",$cadbit,"0<br>";
                    "El bit es par por lo cual se agrego un 0<br>";
                }
                else
                {
                    echo "El nuevo bit es: ",$cadbit,"1<br>";
                    echo "El bit no es par por lo cual se agrego un 1<br>";
                }
            }
        ?>
    </body>
</html>