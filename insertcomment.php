<?php include "connection.php"; ?>

<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];
?>

<?php
  $insert = "INSERT INTO comentarios_tb(nome, email, website, comentario)
VALUES ('$nome', '$email','$comentario')";
$query = mysql_query($insert);
echo "<center><h1>OBRIGADO, </h1></center>"

?>