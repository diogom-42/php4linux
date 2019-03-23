<?php

$dsn = 'pgsql:host=localhost;dbname=aula09_pdo';
$user = 'pdo';
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$update = "UPDATE usuarios SET nome=?, senha=?, WHERE id=?";

$retorno = $conexao->prepare($update);

var_dump($retorno->execute([
    'Update com Prepare',
    '123456789',
    '1',
]));

echo '<hr><pre>';

$select = 'SELECT * FROM usuarios WHERE id > ?';

$pdoSt = $conexao->prepare($select);

$pdoSt->execute([
    100,
]);

$registro = $pdoSt->fetchAll(PDO::FETCH_ASSOC);

print_r($registro);
