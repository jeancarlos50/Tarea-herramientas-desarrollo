<?php
include 'config.php';
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

//conectatar a la base de datos
$consulta = "SELECT * FROM  snp_user where USU_USEREMAIL ='$correo' and  USU_CLAV ='$contraseña'";
$resultado = mysqli_query($con,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas>0){
    header("location:bienvenida.html");
}
else
{
    echo "Error de autenticacion";
}
mysqli_free_result($resultado);
mysqli_close($con);