<?php

class Usuarios
{
    public $nome;
    public $email;

    public static $listaUsuarios = [];

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function salvarUsuario(Usuarios $usuario)
    {
        self::$listaUsuarios[] = $usuario;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function listarUsuarios()
    {
        return self::$listaUsuarios;
    }
}

$usuario1 = new Usuarios();
Usuarios::salvarUsuario($usuario1);

$usuario1->setNome('Diogo MOura');
$usuario1->setEmail('DiogoMOura@bol.com');

$usuario2 = new Usuarios();
Usuarios::salvarUsuario($usuario2);

$usuario2->setNome('Larissa Costa');
$usuario2->setEmail('Larissa.costa@bol.com');

echo 'Total de Usuarios: ' . count(Usuarios::$listaUsuarios);
echo '<br>';
echo 'Total de Usuarios Obj1: ' . count($usuario1->listarUsuarios());
echo '<br>';
echo 'Total de Usuarios Obj2: ' . count($usuario2->listarUsuarios());
echo '<hr>';

foreach (Usuarios::listarUsuarios() as $usuario) {
    echo 'Nome: ' . $usuario->getNome() . '<br>';
    echo 'Email: ' . $usuario->getEmail() . '<hr>';
}