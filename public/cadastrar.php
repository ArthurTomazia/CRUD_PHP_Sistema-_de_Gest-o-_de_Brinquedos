<?php 

include "../infra/connection.php";

    $nome=$_POST["nome"];
    $categori=$_POST["categori"];
    $faixa_etaria=$_POST["faixa_etaria"];
    $preco=$_POST["preco"];
    $estoque=$_POST["estoque"];

$stmt = $conn->prepare("INSERT INTO Brinquedos(nome,categori,faixa_etaria,preco,estoque) VALUES (?,?,?,?,?)");

$stmt->bind_param("sssii", $nome, $categori, $faixa_etaria, $preco, $estoque);

$stmt->execute();

$stmt->close();
header("location: ../index.php");

?>
