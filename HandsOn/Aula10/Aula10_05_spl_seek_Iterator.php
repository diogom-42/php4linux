<?php

class Usuarios implements ArrayAccess, Countable, SeekableIterator
{
    private $usuarios = [];

    private $index = 0;

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

    public function current()
    {
        return $this->usuarios[$this->index];
    }

    public function next()
    {
        return $this->index ++;
    }

    public function valid()
    {
        return isset($this->usuarios[$this->index]);
    }

    public function rewind()
    {
        return $this->index = 0;
    }

    public function key()
    {
        return $this->index;
    }

    public function seek($position)
    {
        return $this->usuarios[$position];
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

echo '<h2>Busca o usuario: ';

echo '<pre>';
print_r($usuarios->seek(2));
echo '<hr>';



