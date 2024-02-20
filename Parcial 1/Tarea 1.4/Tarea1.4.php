<html>
    <body>
        <h1>El mayor de tres números</h1>
        <h2>Descripcion</h2>
        Hacer un programa que dados tres valores calcule el mayor.
        <h2>Entrada</h2>
        Tres numeros aleatorios.
        <h2>Salida</h2>
        El mayor de los tres numeros dados.
        <h2>Ejemplo</h2>
        x=31 y=12 z=42
        <h2>Resultado</h2>
        <?php
            $x=31;
            $y=12;
            $z=42;
            echo "El mayor es: ", max($x,$y,$z);
        ?>
        <br><br><br><br><br>
        <h1>¿Cuántos valen 7?</h1>
        <h2>Descripcion</h2>
        Hacer un programa que dados dos numeros calcule cuantos de ellos valen 7.
        <h2>Entrada</h2>
        dos enteros en el rango de -1000 a +1000.
        <h2>Salida</h2>
        La cantidad de numeros iguales a 7.
        <h2>Ejemplo</h2>
        x=78   y=7 <br>
        <?php
            $x=78;
            $y=7;
            $cont=0;
            if($x==7)
            {
                $cont++;
            }
            if($y==7)
            {
                $cont++;
            }
            echo "La cantidad de numeros iguales a 7 son: ",$cont;
        ?>
        <br><br><br><br><br>
        <h1>Estaciones del Año</h1>
        <h2>Descripcion</h2>
        Hacer un programa que dados dos valores (dia y mes) calcule en que estacion se encuentra o en su debido caso si no existe la fecha. <br><br>
        -Winter del 21 de diciembre al 20 de marzo. <br>
        -Spring del 21 de marzo al 21 de junio. <br>
        -Summer del 22 de junio al 22 de septiembre. <br>
        -Fall del 23 de septiembre al 20 de diciembre. <br><br>
        Considerando la siguiente cantidad de días para cada mes: <br>
        -Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días. <br>
        -Abril, Junio, Septiembre y Noviembre 30 días. <br>
        -Febrero 28 días. <br>
        Cualquier fecha fuera de estos rangos debe considerarse como no existente.


    </body>
</html>