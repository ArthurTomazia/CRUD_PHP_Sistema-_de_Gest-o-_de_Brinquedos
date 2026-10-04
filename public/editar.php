<?php 
include "../infra/connection.php";

$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM Brinquedos WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

$resultado = $stmt->get_result();
$brinquedo = $resultado->fetch_assoc();

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header></header>

<main>

<h3>Editar Brinquedo</h3>
    <br>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $brinquedo["id"]?>">

        <label for="nome">Nome do Brinquedo: </label>
        <input type="text" name="nome" value="<?php echo $brinquedo["nome"]?>" required >
        <br>

        <label for="categori">Categoria do brinquedo: </label>
        <input type="text" name="categori" value="<?php echo $brinquedo["categori"]?>" required>
        <br>

        <label for="faixa_etaria">Faixa etaria do brinquedo: </label>
        <input type="text" name="faixa_etaria" value="<?php echo $brinquedo["faixa_etaria"]?>" required>
        <br>

        <label for="preco">Preço do brinquedo: </label>
        <input type="number" name="preco" value="<?php echo $brinquedo["preco"]?>" required>
        <br>

        <label for="estoque">Estoque disponivel:</label>
        <input type="number" name="estoque" value="<?php echo $brinquedo["estoque"]?>" required>
        <br>
        <button type="submit">Cadastrar Brinquedo</button>
    </form>


</main>

</body>
</html>