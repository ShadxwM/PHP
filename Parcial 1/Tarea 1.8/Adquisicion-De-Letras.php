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
        <h1 class="papu">3991. Adquisición de Letras </h1>
        <table border=1 class="puntuacion">
            <tr>
                <td>Puntos</td>
                <td>11.58</td>
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
        <h4>En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos. El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.</h4>
        <h1>Entrada</h1>
        <h4>Un solo string de letras minúsculas.</h4>
        <h1>Salida</h1>
        <h4>La cantidad de veces que aparece la letra favorita de Miguel.</h4>
        <h1>Ejemplo</h1>
        <h4>Entrada &nbsp&nbspSalida</h4>
        <table border=1>
            <tr>
                <td>abcjdlllld</td>
                <td>2</td>
            </tr>
        </table>
        <form action="Adquisicion-De-Letras.php" method="post">
            Cadena:
            <input type="text" name="cad"><br>
            <input type="submit" value="Enviar"><br>
        </form>
        <?php
            if($_POST)
            {
                $cadena=$_POST['cad'];
                $cont=0;
                $n=strlen($cadena);
                for($i=0; $i<$n; $i++)
                {
                    if($cadena[$i]=='d')
                    {
                        $cont++;
                    }
                } 
                echo "Numero de 'd' que contiene la cadena: ", $cont;
            }
        ?>
    </body>
</html>