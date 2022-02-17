<?php
//recibir los datos y almacenarlos en variables
include 'config.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$movil = $_POST["movil"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
//Consulta para insetar
 $insertar = "INSERT INTO snp_user(USU_NOM,USU_APNO,USU_CEDULA,USU_MOVIL,USU_TIPO,USU_CLAV,USU_USEREMAIL,USU_ACTIVO ) VALUES ('$nombre','$apellido','$cedula','$movil','7','$contraseña','$correo','1')";

 



//ejecutar consulta
$resultado = mysqli_query($con,$insertar);


if (!$resultado){
    echo 'error al registrarse';
}else{
    echo 'usuario registrado exitoxamente';
}


//cerrar conexion

mysqli_close($con);

?>