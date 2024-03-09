<html>
    <h1>2765. Sumando dos conjuntos</h1>
    <table border=1>
        <tr>
            <td>Puntos</td>
            <td>9.95</td>
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
    <h4>
    Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100.<br>
    Por ejemplo, sea N=4:<br>
    2 3 4 5 <br>
    6 7 1 3<br>
    El resultado de sumarlos es:<br>
    8 10 5 8<br>
    </h4>
    <h1>Entrada</h1>
    <h4>En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera línea también separados por un espacio, los números del segundo conjunto.</h4>
    <h1>Salida</h1>
    <h4>Los números resultantes de sumar ambos conjuntos, separados por un espacio.</h4>
    <h4>Entrada &nbsp&nbspSalida &nbsp&nbsp&nbspDescripcion</h4>
    <table border="1">
        <tr>
            <td>4 <br>2 3 4 5<br>6 7 1 3</td>
            <td>&nbsp8 10 5 8&nbsp&nbsp</td>
            <td>2+6, 3+7, 4+1, 5+3.</td>
        </tr>
    </table>
    <?php
        $x1=2;
        $x2=3;
        $x3=4;
        $x4=5;
        $x5=6;
        $x6=7;
        $x7=1;
        $x8=3;
        $suma1=$x1+$x5;
        $suma2=$x2+$x6;
        $suma3=$x3+$x7;
        $suma4=$x4+$x8;
        echo "Resultado: ",$suma1," ",$suma2," ",$suma3," ",$suma4;
    ?>
</html>