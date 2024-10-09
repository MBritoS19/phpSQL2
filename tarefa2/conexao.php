<?php 
$servidor = 'localhost';
$banco = 'futebol';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);