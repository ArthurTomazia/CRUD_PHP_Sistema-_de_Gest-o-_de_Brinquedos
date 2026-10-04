<?php 

include "../infra/connection.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$categori=$_POST["categori"];
$faixa_etaria=$_POST["faixa_etaria"];
$preco=$_POST["preco"];
$estoque=$_POST["estoque"];

$stmt = $conn->prepare("UPDATE Brinquedos SET nome=?,categori=?,faixa_etaria=?,preco=?,estoque=? WHERE id='$id'");

$stmt->bind_param("sssii", $nome, $categori, $faixa_etaria, $preco, $estoque);

$stmt->execute();

$stmt->close();
header("location: ../index.php");
?>