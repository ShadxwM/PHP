<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
    <body>
        <ul>
            <li><a href="Inicio.html">Inicio</a></li>
            <li><a href="Calculos-Condicionales.php">Calculos-Condicionales</a></li>
            <li><a href="Formulota.php">Formulota</a></li>
            <li><a href="El-Lado-Mas-Corto.php">El-Lado-Mas-Corto</a></li>
            <li><a href="Escalera-De-Asteriscos.php">Escalera-De-Asteriscos</a></li>
        </ul>
        <h1 class="papu">11338. Escalera de asteriscos</h1>
        <table border="1" class="puntuacion">
            <tr>
                <td>Puntos</td>
                <td>9.01</td>
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
        <h1>Descripción</h1>
        <h4>Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta.<br>Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> hecha de asteriscos.</h4>
        <h1>Salida</h1>
        <h4>Se te darán como valor de entrada un numero entero <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> el cuál representa la longitud y altura de la escalera.</h4>
        <h1>Salida</h1>
        <h4>Deberás imprimir como salida una escalera de dimensiones <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> de largo y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> de alto</h4>
        <h1>Ejemplo</h1>
        <h4>Entrada Salida</h4>
        <table border=1>
            <tr>
                <td>2</td>
                <td># <br>##</td>
            </tr>
            <tr>
                <td>5</td>
                <td># <br>## <br>### <br>#### <br>#####</td>
            </tr>
            <tr>
                <td>1</td>
                <td>#</td>
            </tr>
            <tr>
                <td>3</td>
                <td># <br>## <br>###</td>
            </tr>
        </table>
        <h1>Límites</h1>
        *<img src="https://latex.codecogs.com/gif.latex?1%5Cleq&space;N%5Cleq&space;15" alt="">
        <hr>
        <form action="Escalera-De-Asteriscos.php" method="post">
            Numero:
            <input type="text" name="n"><br>
            <input type="submit" value="Enviar"><br>
        </form>
        <?php
        if($_POST)
        {
            $n=$_POST['n'];
            for($i=1; $i<=$n; $i++)
            {   
                for($j=0; $j<$i; $j++)
                {
                    echo "#";
                } 
                echo "<br>";
            }
        }
        ?>
    </body>
</html>