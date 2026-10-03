<?php 

include "../infra/connection.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$categori=$_POST["categori"];
$faixa_etaria=$_POST["faixa_etaria"];
$preco=$_POST["preco"];
$estoque=$_POST["estoque"];

$sql = "UPDATE Brinquedos SET nome='$nome',categori='$categori',faixa_etaria='$faixa_etaria',preco='$preco',estoque='$estoque' WHERE id='$id'";

mysqli_query($conn, $sql);
header("Location: ../index.php");
?>