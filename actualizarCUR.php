<?php 
    include("conexionCUR.php");
    $con=conectar();

$id_curso=$_GET['id_curso'];

$sql="SELECT * FROM cursos WHERE id_curso='$id_curso'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateCUR.php" method="POST">

        <input type="hidden" name="id_curso" value="<?php echo $row['id_curso']  ?>">

<label for="nom_curso">CURSO</label>
    <input type="text" class="form-control mb-3" name="nom_curso" id="nom_curso"  value="<?php echo $row['nom_curso']  ?>">

    <label for="id_ano_acad">AÑO ACADEMICO</label>    
    <select type="text" class="form-control mb-3" name="id_ano_acad"  value="<?php echo $row['id_ano_acad']  ?>">
        <option value="<?php echo $row['id_ano_acad'] ?>">Seleccione una opción</option>
        <option value="1">2021</option>
        <option value="2">2020</option>
    </select>

<label for="id_doc">ID Docente</label>
    <input type="text" class="form-control mb-3" name="id_doc" id="id_doc" value="<?php echo $row['id_doc']  ?>">

                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="cursos.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>