<html><link rel="stylesheet" href="style.css"></html><?php
    $conexion=mysqli_connect('localhost','root','','Sistema','3306');
    if($_POST)
    {
        $log=$_POST['log'];
        $pass=$_POST['pass'];
        $consulta="select * from usuarios where login='$log' && password=sha1('$pass');";
        $resultado=mysqli_query($conexion,$consulta);
        $mostrar=mysqli_fetch_array($resultado);
        if($mostrar)
        {
            echo "<h1 align=center>BIENVENIDO</h1>";
        }
        else 
        {
            echo "<h1 align=center>DATOS INCORRECTOS</h1>";
            echo "<h4 align=center>Revisa los datos insertados</h4>";
        }
    }
    mysqli_close($conexion);
?>