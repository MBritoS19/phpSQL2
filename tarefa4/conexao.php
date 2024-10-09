<?php 
$servidor = 'localhost';
$banco = 'livraria';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);