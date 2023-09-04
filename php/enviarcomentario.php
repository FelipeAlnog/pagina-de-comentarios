<?php  

// Llamando a los campos
$nome = $_POST['nome'];

$comentario= $_POST['comentario'];

$conexion=mysqli_connect("localhost","root","","meuteste");  

$nome= mysqli_real_escape_string($conexion,$nome);
$comentario= mysqli_real_escape_string($conexion,$comentario);
$resultado=mysqli_query($conexion,'INSERT INTO comentarios (nome, comentario) VALUES ("'.$nome.'", "'.$comentario.'")');
header('Location: ../index.php');




?>