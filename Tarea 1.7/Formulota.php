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
        <h1 class="papu">18710. Formulota</h1>
        <table border=1 class="puntuacion">
            <tr>
                <td>Puntos</td>
                <td>16.93</td>
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
        <h4>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).</h4>
        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
  <mi>f</mi>
  <mo stretchy="false">(</mo>
  <mi>x</mi>
  <mo>,</mo>
  <mi>y</mi>
  <mo>,</mo>
  <mi>z</mi>
  <mo stretchy="false">)</mo>
  <mo>=</mo>
  <mfrac>
    <mrow>
      <mfrac>
        <mrow>
          <mi>x</mi>
          <mo>+</mo>
          <mi>y</mi>
        </mrow>
        <mrow>
          <mn>2</mn>
          <mi>x</mi>
        </mrow>
      </mfrac>
      <mo>+</mo>
      <mfrac>
        <mrow>
          <msup>
            <mi>x</mi>
            <mn>3</mn>
          </msup>
          <mo>+</mo>
          <msup>
            <mi>y</mi>
            <mn>3</mn>
          </msup>
        </mrow>
        <mrow>
          <msup>
            <mi>x</mi>
            <mn>2</mn>
          </msup>
          <mo>+</mo>
          <msup>
            <mi>y</mi>
            <mn>2</mn>
          </msup>
        </mrow>
      </mfrac>
    </mrow>
    <mrow>
      <msup>
        <mi>x</mi>
        <mn>2</mn>
      </msup>
      <mo>+</mo>
      <msup>
        <mi>y</mi>
        <mn>2</mn>
      </msup>
      <mo>+</mo>
      <msup>
        <mi>z</mi>
        <mn>2</mn>
      </msup>
    </mrow>
  </mfrac>
</math>
        <h1>Entrada</h1>
        <h4>El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.</h4>
        <h1>Salida</h1>
        <h4>La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.<br>Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.</h4>
        <h1>Ejemplos</h1>
        <h4>Entrada Salida Descripcion</h4>
        <table border=1>
            <tr>
                <td>1 <br> 2 <br> 3</td>
                <td>0.235714</td>
                <td>0.235714285714286</td>
            </tr>
            <tr>
                <td>4 <br> 5 <br> 6</td>
                <td>0.074477</td>
                <td>0.0744773519163764</td>
            </tr>
            <tr>
                <td>7 <br> 8 <br> 9</td>
                <td>0.044525</td>
                <td>0.0445247435713634</td>
            </tr>
        </table>
        <h1>Límites</h1>
        *<math xmlns="http://www.w3.org/1998/Math/MathML">
  <mo>&#x2212;</mo>
  <mn>100</mn>
  <mo>&#x2264;</mo>
  <mi>x</mi>
  <mo>,</mo>
  <mi>y</mi>
  <mo>,</mo>
  <mi>z</mi>
  <mo>&#x2264;</mo>
  <mn>100</mn>
</math>
<hr>
        <form action="Formulota.php" method="post">
        Numero x:
        <input type="text" name="x"><br>
        Numero y:
        <input type="text" name="y"><br>
        Numero z:
        <input type="text" name="z"><br>
        <input type="submit" value="Enviar"><br>
        <?php
        if($_POST)
        {
            $f;
            $x=$_POST['x'];
            $y=$_POST['y'];
            $z=$_POST['z'];
            echo "Numero x: ",$x,"<br>","Numero y: ",$y,"<br>","Numero z: ",$z,"<br>";
            $f=((($x+$y)/(2*$x))+(($x*$x*$x+$y*$y*$y)/($x*$x+$y*$y)))/($x*$x+$y*$y+$z*$z);
            echo"Salida: ", round($f,6); echo "<br>";
            echo"Descripción: ",$f;
        }
        ?>
    </body>
</html>