<?php
    require_once ("Newuser.php");
    $m= new Newuser();
    $visualizar=$m->leerdato();
    
    echo'
    <head>
 
  <title>Registro</title>
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
    
</head>
    ';
    $p='<table class="table table-bordered table-striped">
    <thead>
         <tr>
            <th>Id</th>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
         </tr>
    </thead>
    <tbody>';
    $s= "";
    foreach($visualizar as $key=>$value){
        $s = $s.'<tr>
                     <td>'.$value['Id'].'</td>
                     <td>'.$value['Documento'].'</td>
                     <td>'.$value['Nombres'].'</td>
                     <td>'.$value['Apellidos'].'</td>
                     <td>'.$value['Correo'].'</td>
                </tr>';
    }
    echo $p.$s.'</tbody></table>';                                
    
?>
