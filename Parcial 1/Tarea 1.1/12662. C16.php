<html>
    <head></head>
    <body>
         <h1>12662. C16</h1>
        <h2>Descripcion</h2>
        OMIJal se ha encontrado con una variante en el Concurso ACM, pues el numero de programadores que conforman un equipo puede variar, entonces modifica tu programa anterior pues ahora deberás preguntar el numero de 3 integrantes por equipo, al final indica cuantos equipos puedenformarse y cuantos programadores quedan fuera
        <h2>Entrada</h2>
        Dos números que representen el número de programadores y el número de programadores por equipo
        <h2>Salida</h2>
        Salida con el número de equipos formados y los estudiantes sin equipo, escrito exactamente como en el ejemplo
        <h2>Ejemplo 1</h2>
        <?php
            $a=5;
            $b=4;
            echo "ENTRADA <BR>",$a,"<BR>",$b;
            echo "<BR>SALIDA<BR>Equipos formados: ",round($a/$b);
            echo "<BR> Estudiantes sin equipo: ",$a%$b;
        ?>
        <h2>Ejemplo 2</h2>
        <?php
            $a=18;
            $b=3;
            echo "ENTRADA <BR>",$a,"<BR>",$b;
            echo "<BR>SALIDA<BR>Equipos formados: ",round($a/$b);
            echo "<BR> Estudiantes sin equipo: ",$a%$b;
        ?>
    </body>
</html>