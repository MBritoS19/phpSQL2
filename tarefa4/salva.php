<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['titulo'];
echo "<br>";
echo $_POST['idioma'];
echo "<br>";
echo $_POST['paginas'];
echo "<br>";
echo $_POST['editora'];
echo "<br>";
echo $_POST['publicacao'];
echo "<br>";
echo $_POST['isbn'];

$codigoSQL = "INSERT INTO `livro` (`id`, `titulo`, `idioma`, `paginas`, `editora`, `dataPublicacao`, `ISBN`) VALUES (NULL, :tit, :idi, :pag, :edi, :pub, :isbn)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('tit' => $_POST['titulo'], 'idi' => $_POST['idioma'], 'pag' => $_POST['paginas'], 'edi' => $_POST['editora'], 'pub' => $_POST['publicacao'], 'isbn' => $_POST['isbn']));

    if($resultado) {
	echo "Comando executado!<br>";
    } else {
	echo "Erro ao executar o comando!<br>";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
header("location: mostrar.php");