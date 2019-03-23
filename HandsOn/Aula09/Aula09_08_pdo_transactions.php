<?php

$dsn = 'pgsql:host=localhost;dbname=aula09_pdo';
$user = 'pdo';
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
           VALUES('Maria de lima', 'mari@gmail.com', '123456')";

$conexao->beginTransaction();

try {
    for ($i=0; $i < 10; $i++) { 
        $conexao->exec($insert);
    }

    $conexao->commit();
} catch (PDOException $e) {
   $conexao->rollBack();
   echo "Erro: {$e->getMessage()}";
}