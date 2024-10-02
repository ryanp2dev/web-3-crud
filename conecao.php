<?php 

$endereco = 'localhost';
$banco = 'lisata-01';
$usuario = 'postgres';
$senha = 'postgres';
$porta = 5433;
$conexao = new PDO("pgsql:host=$endereco;dbname=$banco;port=$porta", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);  

var_dump($conexao);