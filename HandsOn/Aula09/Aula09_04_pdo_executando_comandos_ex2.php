<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = 'developer';
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

//Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
           VALUES('Diogo Moura', 'diogo@gmail.com', '123456')";

// $update = "UPDATE usuarios set senha = '456132'";

$retorno = $conexao->exec($insert);
// $retorno = $conexao->exec($update);

var_dump($retorno);