<?php

class Usuarios
{
    protected $nome;
    protected $email;

    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "<hr>Erro a propiedade $atributo n existe <hr>";
        }
    }

    public function __get($atributo)
    {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }

    public function __isset($atributo)
    {
        return isset($this->$atributo);
    }
    
    public function __unset($atributo)
    {
        unset($this->$atributo);
    }
}

$usuario = new Usuarios();
$usuario->nome = 'Diogo Moura';
$usuario->email = 'diogo@gmail.com';

echo 'Nome do Usuario: ' . $usuario->nome;
echo '<br>Email do Usuario: ' . $usuario->email . '<hr>';

unset($usuario->email);
var_dump(isset($usuario->email));

echo '<pre><hr>';
var_dump($usuario);
