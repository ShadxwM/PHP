<?php
    $a=array();
    $n=rand(1,10000);
    for($i=1; $i<=$n; $i++)
    {
        array_push($a, rand(1,10));
    }
    echo "Datos generados: ", $n, "<br>";
    $suma=0;
    for($i=0; $i<$n; $i++)
    {
        $suma=$suma+$a[$i];
    }
    $promedio=$suma/$n;
    echo "<br>";
    echo "El promedio de las calificaiones es: ",round($promedio,1);
    $masprom=0;
    $aprobados=0;
    $reprobados=0;
    for($i=0; $i<$n; $i++)
    {
        if($a[$i]>$promedio)
        {
            $masprom++;
        }
        if($a[$i]>6)
        {
            $aprobados++;
        }
        else
        {
            $reprobados++;
        }
    }
    echo "<br>";
    echo "La cantidad de alumnos mayores al promedio es: ",round($masprom),"<br>" ;
    echo "<br>";
    echo "La cantidad de reprobados es: ",$reprobados, "<br>" ;
    $wer=($reprobados/$n)*100;
    echo "El porcentaje de reporbados es: ",round($wer,1), "%<br><br>";
    echo "La cantidad de aprobados es: ",$aprobados, "<br>" ;
    $tyu=($aprobados/$n)*100;
    echo "El porcentaje de aprobados es: ",round($tyu,1), "%<br>";

     $jijija=0;
     for ($i = 0; $i < $n; $i++) {
        $jijija = $jijija + (($a[$i] - $promedio) * ($a[$i] - $promedio));
    }
     $desB= sqrt( $jijija/$n );
     echo "La desviacion es: ", round($desB,3);

    $m=0;
    echo "<table border='1'>";
    while($m<=$n-29)
    {
        echo"<tr>";
        for($k=0; $k<=29; $k++)
        {
            echo "<td>",$a[$m],"</td>";
            $m++;
        }
        echo"</tr>";
     }
    echo "</table>";
    
?>