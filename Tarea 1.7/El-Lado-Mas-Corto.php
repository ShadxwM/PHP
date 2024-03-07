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
    </body>
    <h1 class="papu">7093. El lado más corto</h1>
    <table border=1 class="puntuacion">
        <tr>
            <td>Puntos</td>
            <td>8.69</td>
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
    <h4>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</h4>
    <img src="https://omegaup.com/img/El-lado-mas-corto/92ba89763999e8ba279d510c31c3e0bb666bf271.png" alt="">
    <h1>Entrada</h1>
    <h4>Ocho reales <math xmlns="http://www.w3.org/1998/Math/MathML">
  <msub>
    <mi>x</mi>
    <mn>1</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>1</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>x</mi>
    <mn>2</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>2</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>x</mi>
    <mn>3</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>3</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>x</mi>
    <mn>4</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>4</mn>
  </msub>
</math>. Puedes suponer que <math xmlns="http://www.w3.org/1998/Math/MathML">
  <mn>0</mn>
  <mo>&#x2264;</mo>
  <msub>
    <mi>x</mi>
    <mi>i</mi>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mi>i</mi>
  </msub>
  <mo>&#x2264;</mo>
  <mn>100</mn>
</math> y que los vértices se listan ordenados en el sentido de las manecillas del reloj.
    </h4>
    <h1>Salida</h1>
    <h4>Un real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.</h4>
    <h1>Ejemplo</h1>
    <h4>Entrada     Salida</h4>
    <table border=1>
        <tr>
            <td>x1: 10.1 &nbsp y1: 10.2 <br> x2: 20.2 &nbsp y2: 10.3 <br> x3: 22.3 &nbsp y3: 4.1 <br> x4: 7.5 &nbsp&nbsp&nbsp y4: 0.9</td>
            <td>6.545991</td>
        </tr>
    </table>
    <form action="El-Lado-Mas-Corto.php" method="post">
        x1:
        <input type="text" name="xd"><br>
        x2:
        <input type="text" name="sas"><br>
        x3:
        <input type="text" name="kawabonga"><br>
        x4:
        <input type="text" name="sopas"><br>
        y1:
        <input type="text" name="arturo"><br>
        y2:
        <input type="text" name="enrique"><br>
        y3:
        <input type="text" name="pepe"><br>
        y4:
        <input type="text" name="m"><br>
        <input type="submit" value="Enviar"><br>
    </form>
    <h4>
    <?php
        if($_POST)
        {
            $xd=$_POST['xd'];
            $sas=$_POST['sas'];
            $kawabonga=$_POST['kawabonga'];
            $sopas=$_POST['sopas'];
            $arturo=$_POST['arturo'];
            $enrique=$_POST['enrique'];
            $pepe=$_POST['pepe'];
            $m=$_POST['m'];

            $w=sqrt((pow($sas-$xd,2))+(pow($enrique-$arturo,2)));
            $x=sqrt((pow($kawabonga-$sas,2))+(pow($pepe-$enrique,2)));
            $y=sqrt((pow($sopas-$kawabonga,2))+(pow($m-$pepe,2)));
            $z=sqrt((pow($sopas-$xd,2))+(pow($m-$arturo,2)));
            
            if($w<$x && $w<$y && $w<$z)
            {
                echo "Resultado: ",round($w,6);
            }
            else if($x<$y && $x<$z)
            {
                echo "Resultado: ",round($x,6);
            }
            else if($y<$z)
            {
                echo "Resultado: ",round($y,6);
            }
            else
            {
                echo "Resultado: ",round($z,6);
            }
        }
    ?>
    </h4>
</html>