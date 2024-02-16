<html>
    <head></head>
    <body>
        <h1>12655. C09</h1>
        <h2>Descripción</h2>
        Escribe un programa que solicite las calificaciones de Matemáticas, Español y Cocina y nos de su promedio.
        <h2>Entrada</h2>
        Tres números reales
        <h2>Salida</h2>
        Un número real representado el promedio de los tres números
        <?php
        echo "<BR>";
        ?>
        Entrada
        <?php
        echo "<BR>";
        ?>
        10 9.5 9.0 
        <?php
        echo "<BR>";
        ?>      
        Salida 9.5
        <h2>EJERCICIO</h2>
        <?php
            $a=10.0;
            $b=9.5;
            $c=9.0;
            echo "A=",$a,"<BR>B=",$b,"<BR>C=",$c;
            echo "<BR>RESULTADO<BR>",($a+$b+$c)/3;
        ?>
    </body>
</html>