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
        <h1 class="papu">7050. Cálculos condicionales</h1>
        <table border="1" class="puntuacion">
            <tr>
                <td>Puntos</td>
                <td>8.49</td>
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
        Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math>, realizar las siguientes operaciones en el orden indicado y con aritmética entera:
        Si el valor actual de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> es par, divídelo entre 2. En caso contrario, súmale 1.
        Si el valor actual de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.
        Si el valor actual de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> es un múltiplo de tres, réstale uno.
        Escribe un programa que te ayude a calcular el valor final de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> y el número de veces que <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> fue modificado.
        </h4>
        <h1>Entrada</h1>
        <h4>Un entero <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math>. Puedes suponer que <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>&#x2264;</mo><mi>N</mi><mo>&#x2264;</mo><mn>1000</mn></math>.</h4>
        <h1>Salida</h1>
        <h4>Dos enteros que correspondan con el valor final de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> y el número de veces que <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>N</mi></math> fue modificado respectivamente.</h4>
        <h1>Ejemplo</h1>
        <h5>  Entrada Salida</h5>
        <table border=1>
            <tr>
                <td>7</td>
                <td>8 1</td>
            </tr>
        </table>
        <hr>
        <form action="Calculos-Condicionales.php" method="post">
            Numero:
            <input type="text" name="n">
            <input type="submit" value="Enviar">
        </form>
        <?php
            $cont=0;
            if($_POST)
            {
                $n=$_POST['n'];
                echo "Numero elegido: ",$n,"<br>";
                if($n%2==0)
                {  
                    $n=$n/2; 
                    $cont++;
                }
                else
                {
                    $n=$n+1;
                    $cont++;
                }
                if($n>100)
                {
                    $n=$n/100;
                    $cont++;
                }  
                else if($n<100 and $n>10)
                {
                    $n=$n/10;
                    $cont++;
                }
                if($n%3==0)
                {
                    $n=$n-1;
                    $cont++;
                }
                echo "Resultado final: ",$n; echo"<br>";
                echo"Modificaciones totales: ",$cont;
            }
            ?>
    </body>
</html>