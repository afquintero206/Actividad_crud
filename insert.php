<?php

require_once ('Connect.php');
 $Documento =$_POST['Documento'];
 $Nombres =$_POST['Nombres'];
 $Apellidos =$_POST['Apellidos'];
 $Correo =$_POST['Correo'];


//if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['Nombre']) && !empty($_POST['Nombre'])){
    $conn = new Connect();
    $connect = $conn->init();
    //$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // $sql = "INSERT INTO user (Documento, Nombres, Apellidos, Correo) VALUES (:Documento,:Nombres,:Apellidos,:Correo)";

    $query = $connect->prepare("INSERT INTO persona (Documento, Nombres, Apellidos, Correo) VALUES (:Documento,:Nombres,:Apellidos,:Correo)");
    //$query -> bindParam(":email",$_POST['email']);
    //$query -> bindParam(":password",$_POST['password']);
    //$query -> bindParam(":Nombre",$_POST['Nombre']);
    $query -> bindParam(":Documento",$Documento);
    $query -> bindParam(":Nombres",$Nombres);
    $query -> bindParam(":Apellidos",$Apellidos);
    $query -> bindParam(":Correo",$Correo);
    $query -> execute();
   // print("<script> alert('Regisytro guardado con exito');</script>");
   echo "<div class='content alert alert-primary'> Registro añadido  </div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<br>
<br>
<a href="inicio.php" class="btn btn-secondary ml-2">volver</a>

</body>
</html>