<?php 
    $servidor = 'localhost';
    $banco = 'receitas';
    $usuario = 'root';
    $senha = '';
    
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);