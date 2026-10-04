<?php 
include "infra/connection.php";
$Brinquedos = mysqli_query($conn, "SELECT * FROM Brinquedos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    
<header><h2>Loja de Brinquedos</h2></header>
<br><br>
<main>
    <h3>Adicionar novo Brinquedo</h3>
    <br>
    <form action="public/cadastrar.php" method="POST">
        <label for="nome">Nome do Brinquedo: </label>
        <input type="text" name="nome" required>
        <br>

        <label for="categori">Categoria do brinquedo: </label>
        <input type="text" name="categori" required>
        <br>

        <label for="faixa_etaria">Faixa etaria do brinquedo: </label>
        <input type="number" name="faixa_etaria" required>
        <br>

        <label for="preco">Preço do brinquedo: </label>
        <input type="number" name="preco" required>
        <br>

        <label for="estoque">Estoque disponivel:</label>
        <input type="number" name="estoque" required>
        <br>
        <button type="submit">Cadastrar Brinquedo</button>
    </form>

    <br><br>

<div>

    <h1>Brinquedos Cadastrados</h1>
    <table>

    <tr>
        <th>nome</th>
        <th>categoria</th>
        <th>faixa_etaria</th>
        <th>preco</th>
        <th>estoque</th>
        <th>ID</th>
        <th>Ações</th>
    </tr>

<?php while ($brinquedo = mysqli_fetch_assoc($Brinquedos)) { ?>

    <tr>
        <td><?php echo $brinquedo['nome'] ?></td>
        <td><?php echo $brinquedo['categori'] ?></td>
        <td><?php echo $brinquedo['faixa_etaria'] ?></td>
        <td><?php echo $brinquedo['preco'] ?></td>
        <td><?php echo $brinquedo['estoque'] ?></td>
        <td><?php echo $brinquedo['id'] ?></td>
        <td>
            <a href="public/editar.php?id=<?php echo $brinquedo['id'] ?>">Editar</a>
            <a href="public/excluir.php?id=<?php echo $brinquedo['id'] ?>">Excluir</a>
        </td>
    </tr>

<?php } ?>
</table>
</div>


</main>

</body>
</html>