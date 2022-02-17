<?php

if(isset($_POST['moveFile']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
            $location = "Documentos";
            if(move_uploaded_file($tempName, $location.$fileName))
            {
                echo 'Archivo Subido con éxito';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagen al servidora</title>
</head>
<body>

<center>
    <h1>Herramientas de Desarrollo de Software</h1>
    <h2>Derian Solorzano</h2> 
    <p> <b>Guardar Imágenes </b> </p> 

    <form action="" method="post" enctype="multipart/form-data">
        Subir un archivo:
        <input type="file" name="fileName">
        <input type="submit" name="moveFile" value="Guardar">
    </form>

    </center>
    
</body>
</html>