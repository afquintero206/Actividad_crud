<?php
require_once('Connect.php');

if(!empty($_POST["actualizar"])) {
	$conn = new Connect();
    $connect = $conn->init();
	$pdo_statement=$connect->prepare("update persona set Documento='" . $_POST[ 'Documento' ] . "', Nombres='" . $_POST[ 'Nombres' ]. "', Apellidos='" . $_POST[ 'Apellidos' ]. "' , Correo='" . $_POST[ 'Correo' ]. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:inicio.php');
	}
}
$conn = new Connect();
$connect = $conn->init();
$pdo_statement = $connect->prepare("SELECT * FROM persona where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Editar</h2>
                    <p>Por favor editar los campos que desea actualizar.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Documento</label>
                            <input type="text" name="Documento" class="form-control " placeholder="Ingrese su documento"></input>
                            
                        </div>
                        <div class="form-group">
                            <label>Nombres</label>
                            <input name="Nombres" class="form-control " placeholder="Ingrese sus nombres"></input>
                            
                        </div>
						<div class="form-group">
                            <label>Apellidos</label>
                            <input name="Apellidos" class="form-control " placeholder="Ingrese sus apellidos"></input>
                            
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" name="Correo" class="form-control " placeholder="Ingrese su correo">
                            <span class="invalid-feedback"><?php echo $Nombre_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input name="actualizar" type="submit" class="btn btn-primary" value="Enviar">
                        <a href="inicio.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>