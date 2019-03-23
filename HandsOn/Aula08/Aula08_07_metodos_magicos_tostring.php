<?php

class Usuarios
{
    public $nome;
    public $email;
    public $senha;

    public function __toString()
    {
        $result = "{
            \"nome\" : \"{$this->nome}\",
            \"email\" : \"{$this->email}\"
        }";
        return $result;
    }
}

$usuario = new Usuarios();
$usuario->nome = 'Diogo Moura';
$usuario->email = 'diogo@gmail.com';
$usuario->senha = 'q1w2e3';

echo $usuario;