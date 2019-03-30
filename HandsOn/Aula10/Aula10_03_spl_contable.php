<?php

class Usuarios implements ArrayAccess, Countable
{
    private $usuarios = [];

    public function offsetExists($offset)
    {
        return isset($this->usuarios[$offset]);        
    }

    public function offsetGet($offset)
    {   
        echo $offset;
        if (isset($this->usuarios[$offset])) {
            return $this->usuarios[$offset];
        }
    }

    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            return $this->usuarios[] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->usuarios[$offset]);
    }

    public function count()
    {
        return count($this->usuarios);
    }
}

class Usuario
{
    protected $nome;
    protected $email;
    protected $senha;

    public function __construct($nome, $email, $senha)
    {
       $this->nome = $nome;
       $this->senha = $senha;
       $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}


$usuarios = new Usuarios();
$usuarios[] = new Usuario('Carolina dos Santos', 'carol@gmail.com', '12345'); 
$usuarios[] = new Usuario('Diogo Moura', 'diogo@gmail.com', '12345'); 
$usuarios[] = new Usuario('Jussemar', 'jucmar@gmail.com', '12345'); 
$usuarios[10] = new Usuario('Wanderley', 'deley@gmail.com', '12345'); 

echo '<h1>Total de Usuarios: ' . count($usuarios) . '</h1>';

echo '<pre>';
var_dump($usuarios[10]);
echo '<hr>';

echo 'Nome Usuario: '      . $usuarios[10]->getNome();
echo '<br>Email Usuario: ' . $usuarios[10]->getEmail();
echo '<br>Senha Usuario: ' . $usuarios[10]->getSenha();
echo "<hr>";
echo "<pre>";

print_r($usuarios);

