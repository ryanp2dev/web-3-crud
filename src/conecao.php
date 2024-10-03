<?php 

$endereco = 'localhost';
$banco = 'lanchonete';
$usuario = 'postgres';
$senha = 'postgres';
$porta = 5433;
$pdo = new PDO("pgsql:host=$endereco;dbname=$banco;port=$porta", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);  






