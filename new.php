<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuario Nuevo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form action="insert.php" method="POST">
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Nuevo Usuario</h2>
                    <p>Complete el formulario, el registro de usuario se agregara a la base de datos.</p>
                    
                        <div class="form-group">
                        <label for="Documento">Documento</label>
                        <input name="Documento" type="text" class="form-control" placeholder="Documento">
                        </div>
                        <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input name="Nombres" type="text" class="form-control" id="Nombres" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                        <label for="Apellidos">Apellidos</label>
                        <input name="Apellidos" type="text" class="form-control" id="Apellidos" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                        <label for="Correo">Correo</label>
                        <input name="Correo" type="text" class="form-control" id="Correo" placeholder="Correo">
                        </div>
                        <input name="insert" type="submit" class="btn btn-primary" value="Guardar">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    
                </div>
            </div>        
        </div>
    </div>
</div>
</form>
</body>
</html>