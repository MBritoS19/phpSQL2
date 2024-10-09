<?php
include("conexao.php");

$comandoSQL = "DELETE FROM times WHERE `times`.`id` = :id";

try {
$comando = $conexao->prepare($comandoSQL);

$resultado = $comando->execute(array('id' => $_GET['id']));

if($resultado) {
echo "Item apagado!";
} else {
echo "Erro ao apagar o item!";
}
} catch (Exception $e) {
echo "Erro $e";
}
header("location: mostrar.php");