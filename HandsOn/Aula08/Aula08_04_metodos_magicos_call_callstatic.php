<?php

class Usuarios
{
    protected $nome;
    protected $email;

    public function __call($metodo, $atributos)
    {
        echo "<hr> Método $metodo foi chamado porém ele n existe os seguintes parâmentros foram passados";
        echo '<pre>';
        print_r($atributos);
        echo '<hr>';
    }
    public static function __callStatic($metodo, $atributos)
    {
        echo "<hr> Método $metodo foi chamado de forma estatica porém ele n existe os seguintes parâmentros foram passados";
        echo '<pre>';
        print_r($atributos);
        echo '<hr>';
    }
}


$usuario = new Usuarios();
$usuario->setNome('Diogo Moura');
Usuarios::listar('hublahubla');
