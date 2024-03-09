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
        <h1 class="papu">4886. Autores </h1>
        <table border=1 class="puntuacion">
            <tr>
                <td>Puntos</td>
                <td>12.44</td>
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
            Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas.
        </h4>
        <h1>Entrada</h1>
        <h4>
            La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.
        </h4>
        <h1>Salida</h1>
        <h4>La primera y única línea de salida debe contener la variación corta apropiada.</h4>
        <h1>Ejemplo</h1>
        <h4>Entrada&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSalida</h4>
        <table border="1">
            <tr>
                <td>Knuth-Morris-Pratt</td>
                <td>KMP</td>
            </tr>
            <tr>
                <td>Mirko-Slavko</td>
                <td>MS</td>
            </tr>
            <tr>
                <td>Pasko-Patak</td>
                <td>PP</td>
            </tr>
        </table>
        <form action="Autores.php" method="post">
            Autores:
            <input type="text" name="autores"><br>
            <input type="submit" value="Enviar"><br>
        </form>
        <?php
            if($_POST)
            {
                $autores=$_POST['autores'];
                $n=strlen($autores);
                echo "Abreviacion de los autores: ";
                echo strtoupper($autores[0]);
                for($i=0; $i<$n; $i++)
                {
                    if($autores[$i]=='-')
                    {
                        echo strtoupper($autores[$i+1]);
                    }
                }
            }
        ?>
    </body>
</html>