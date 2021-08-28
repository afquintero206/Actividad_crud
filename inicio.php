<?php
 require_once "Connect.php";
 require_once "User.php";
session_start();

if (!$_SESSION) {
  header("Location:http://localhost/crud/login.php");
   }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Inicio</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
  <h7>Sesión iniciada, Hola 
    <?php echo $_SESSION['email']; ?>
  </h7>
    <!-- BOTON DENTRO DE UN FORM PARA CERRAR SESION https://www.w3schools.com/php/php_sessions.asp-->
  

    
  <div class="container">
  <div class="row">
    <div class="col text-center">
    <form action="logout.php" method="post">
    <button type="submit" class= "btn btn-secondary btn-sm pull-right" >Logout</button>
    </form>        
    </div>
  </div>
  </div>



            
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Lista de Usuarios</h2>
                        <a href="new.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Nuevo Usuario</a>
                    </div>

<?php
			  if(isset($_GET["borrar"])){
          // se agrega la funcion setTimeout de javascript para que despues de 5 segudos se ejecute el funcion cerrar
          echo "<div id='borrar' onclick='cerrar()' class='content alert alert-primary' > Registro eliminado  </div><script>setTimeout(cerrar, 2000)</script>";
          }
            
			include_once('Connect.php');

            $conn = new Connect();
            $connect = $conn->init();
           
                echo '<table class="table table-bordered table-striped">';
                echo "<thead>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Documento</th>";
                echo "<th>Nombres</th>";
                echo "<th>Apellidos</th>";
                echo "<th>Correo</th>";
                echo "<th>Accion</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
         
              $query = $connect->prepare("SELECT * FROM persona");
              // Ejecutamos
              $query->execute();
               // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
               while($row = $query->fetch(PDO::FETCH_OBJ)){
             
             echo "<tr>";
             echo "<td>" . $row->id . "</td>";
             echo "<td>" . $row->Documento . "</td>";
             echo "<td>" . $row->Nombres . "</td>";
             echo "<td>" . $row->Apellidos . "</td>";
             echo "<td>" . $row->Correo . "</td>";
             echo "<td>";
                echo '<a href="update.php?id='. $row->id .'" class="mr-3" title="Actualizar perfil" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                echo '<a href="delete.php?id='. $row->id .'" title="Borrar perfil" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                
            echo "</td>";
            echo "</tr>";
                          

            }
            
            echo "</table>";
?>
           </div>
       </div>        
   </div>
</div>

</body>
</html>