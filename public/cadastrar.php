<?php 

include "../infra/connection.php";

    $nome=$_POST["nome"];
    $categori=$_POST["categori"];
    $faixa_etaria=$_POST["faixa_etaria"];
    $preco=$_POST["preco"];
    $estoque=$_POST["estoque"];

$sql = "INSERT INTO Brinquedos(nome,categori,faixa_etaria,preco,estoque) VALUES ('$nome','$categori','$faixa_etaria','$preco','$estoque')";

mysqli_query($conn, $sql);

header("location: ../index.php");

?>
