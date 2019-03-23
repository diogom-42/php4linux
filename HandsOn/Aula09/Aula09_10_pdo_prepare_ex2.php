<?php

$dsn = 'pgsql:host=localhost;dbname=aula09_pdo';
$user = 'pdo';
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $insert = "INSERT INTO usuarios(nome, email, senha)
//            VALUES(:nome, :email, :senha)";
$insert = "INSERT INTO usuarios(nome, email, senha)
           VALUES(?,?,?)";

$retorno = $conexao->prepare($insert);

for ($i=0; $i < 3; $i++) { 
    var_dump($retorno->execute([
        "Mariana souza lima - $i",
        "mari_$i@gmail.com",
        "23165487"
    ]));
}
