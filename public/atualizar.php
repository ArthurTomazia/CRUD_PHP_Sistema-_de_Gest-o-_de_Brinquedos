<?php 

include "../infra/connection.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$categori=$_POST["categori"];
$faixa_etaria=$_POST["faixa_etaria"];
$estoque=$_POST["estoque"];
$preco = str_replace(',','.', $_POST["preco"]);

$stmt = $conn->prepare("UPDATE Brinquedos SET nome=?,categori=?,faixa_etaria=?,preco=?,estoque=? WHERE id='$id'");

$stmt->bind_param("sssdi", $nome, $categori, $faixa_etaria, $preco, $estoque);

$stmt->execute();

$stmt->close();
header("location: ../index.php");
?>