<?php

include("conexionCUR.php");
$con=conectar();

if(isset($_GET['id_curso'])) {
  $id_curso = $_GET['id_curso'];
  $query = "DELETE FROM cursos WHERE id_curso='$id_curso'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: cursos.php"); 
}

?>