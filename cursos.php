<?php 
    include("conexionCUR.php");
    $con=conectar();

    $sql="SELECT*FROM cursos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <body>      
<div align="center">
   <title> CRUD_CURSOS </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<table width="100%">
    <tr>       
        <th></th>
        <th>    
            <body style="background-color:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">
            
        </th>
        <th >
            <H1><B><p style = "font-family:Courier New;">
                    CURSOS
                    </p></B></H1>
        </th>

        <th><label for="busqueda"></label><br><a href="ingresarCUR.php" class="boton_1" ><style type="text/css">
  .boton_1{
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: Century Gothic;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #000000;
    background-color: #FFFFFF;
    border-radius: 15px;
    border: 3px double #FFFFFF;
  }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
  }
</style>INGRESAR CURSO</a></th>

        
        <th></th>
        <th></th>
        </tr>

    </head>
    <body>
        
    </head>
    <body>
                        <div class="col-md-8">
                            <table class="table" border="1">

                                <thead class="table-success table-striped">
                                    <tr>
                                        <td style="font-family:inherit; font-size: 9">ID</td>
                                        <td style="font-family:inherit; font-size: 9">Nombre del Curso</td>
                                        <td style="font-family:inherit; font-size: 9">Año Academico</td>
                                        <td style="font-family:inherit; font-size: 9">ID Docente</td>
                                        <td style="font-family:inherit; font-size: 9">Editar</td>
                                        <td style="font-family:inherit; font-size: 9">Eliminar</td>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                       $sql="SELECT*FROM cursos";
                                       $query=mysqli_query($con,$sql);

                                       
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><FONT COLOR="#330000"><?php  echo $row['id_curso']?></FONT></td>
                                                <td><FONT COLOR="#330000"><?php  echo $row['nom_curso']?></FONT></td>
                                                <td><FONT COLOR="#330000"><?php  echo $row['id_ano_acad']?></FONT></td>
                                                <td><FONT COLOR="#330000"><?php  echo $row['id_doc']?></FONT></td>    
                                                <th style="font-family:hobo; font-size: 10",color:darkred><a href="actualizarCUR.php?id_curso=<?php echo $row['id_curso'] ?>" class="btn btn-warning">Editar</a></th>
                                                <th style="font-family:hobo; font-size: 10",color:skyblue><a href="deleteCUR.php?id_curso=<?php echo $row['id_curso'] ?>" class="btn btn-danger">Eliminar</a></th>  
                                                                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>