<?php

$dsn = 'pgsql:host=localhost;dbname=aula09_pdo';
$user = 'pdo';
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

// Definindo o modo de erro da classe PDO;

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT * FROM usuarios';

class Usuario
{
	public $id;
	public $nome;
	public $email;
	public $senha;
}

// Método fetch com PDO::FETCH_CLASS-------------------
$retorno = $conexao->query($query);

$retorno->setFetchMode(PDO::FETCH_CLASS, 'Usuario');

while ($usuario = $retorno->fetch(PDO::FETCH_CLASS)) {
    echo 'Id: ' . $usuario->id;
    echo '<br>Nome: ' . $usuario->nome;
    echo '<br>Email: ' . $usuario->email;
    echo '<br>Senha: ' . $usuario->senha;
    echo '<hr>';
}
//-----------------------------------------------------

// Método fetchAll com PDO::FETCH_CLASS-------------------
$retorno = $conexao->query($query);

$registros = $retorno->fetchAll(PDO::FETCH_CLASS, 'Usuario');

foreach ($registros as $usuario) {
    echo 'Id: ' . $usuario->id;
    echo '<br>Nome: ' . $usuario->nome;
    echo '<br>Email: ' . $usuario->email;
    echo '<br>Senha: ' . $usuario->senha;
    echo '<hr>';
}
//-----------------------------------------------------

// Método fetchAll com PDO::FETCH_ASSOC-------------------
$retorno = $conexao->query($query);

$registros = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($registros);

echo '<hr>';

foreach ($registros as $registro){
    echo 'Id: ' . $registro['id'];
    echo '<br>Nome: ' . $registro['nome'];
    echo '<br>Email: ' . $registro['email'];
    echo '<br>Senha: ' . $registro['senha'];
    echo '<hr>';
}
//-----------------------------------------------------

print_r($registros);



