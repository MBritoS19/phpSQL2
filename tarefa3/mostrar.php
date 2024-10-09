<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
    include("conexao.php");
    $comandoSQL = 'SELECT `id`, `nome`, `url`, `descricao`, `preco` FROM `produtos`';
    $comando = $conexao->prepare($comandoSQL);
    $resultado = $comando->execute();
    if ($resultado) {
        echo'Mostrando Resultado: <br>';
        while($linha = $comando->fetch()) {
            echo $linha['nome'] . " ";
            echo $linha['url'] . " ";
            echo $linha['descricao'] . " ";
            echo $linha['preco'] . " ";
            $id = $linha['id'];
            echo "<a href='excluir.php?id=$id' class='btn btn-primary'>Apagar</a><br>";
            echo "<br>";
          }
    }

    ?>
    <form action="excluir.php" method="post">
	<label for="id">ID:</label>
	<input type="number" name="id"><br>
	<input type="submit" value="Excluir"><br>
    </form>
    <a href="formulario.php" class="btn btn-primary">Voltar ao Formulario</a>
    <a href="http://localhost/index.php" class="btn btn-primary">Voltar ao Menu</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>