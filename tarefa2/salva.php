<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['nome'];
echo "<br>";
echo $_POST['pontos'];

$codigoSQL = "INSERT INTO `times` (`id`, `nome`, `pontos`) VALUES (NULL, :nm, :pnt)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_POST['nome'], 'pnt' => $_POST['pontos']));

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