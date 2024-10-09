<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="salva.php" method="post">
	<label for="titulo">Titulo:</label>
	<input type="text" name="titulo"><br>
	<label for="idioma">Idioma:</label>
	<input type="text" name="idioma"><br>
    <label for="paginas">Quantidade de Paginas:</label>
	<input type="number" name="paginas"><br>
    <label for="editora">Editora:</label>
	<input type="text" name="editora"><br>
    <label for="publicacao">Data de Publicação:</label>
	<input type="date" name="publicacao"><br>
    <label for="isbn">ISBN:</label>
	<input type="text" name="isbn"><br>
	<input type="submit"><br>
    </form>
    <a href="mostrar.php" class="btn btn-primary">Mostrar</a><br><br>
    <a href="http://localhost/index.php" class="btn btn-primary">Voltar ao Menu</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>