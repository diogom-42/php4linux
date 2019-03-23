<?php

$dsn = 'pgsql:host=localhost;dbname=aula09_pdo';
$user = 'pdo';
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$insert = "INSERT INTO usuarios(nome, email, senha)
           VALUES(:nome, :email, :senha)";

           $nome = 'Alfredo Dantas';
           $email = 'dantas@gmail.com';
           $senha = 'q1w2e3';

$retorno = $conexao->prepare($insert);

$retorno->bindParam(':nome', $nome, PDO::PARAM_STR, 60);
$retorno->bindParam(':email', $email, PDO::PARAM_STR, 100);
$retorno->bindParam(':senha', $senha, PDO::PARAM_STR, 100);

var_dump($retorno->execute());
