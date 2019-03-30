<?php

class Conta
{
    protected $saldo = 0;

    /**
     * depositar
     * Faz deposito de valor na conta
     * @param float $valor
     */

     public function depositar($valor)
     {
         $this->saldo += $valor;
     }

     public function sacar($valor)
     {
         $this->saldo -= $valor;
     }
}

echo '<h1>Reflection Conta</h1>';

$reflection = new ReflectionClass('Conta');

echo '<pre>';
print_r($reflection->getMethods());
echo '<hr>';
print_r($reflection->getProperties());
echo '<hr>';

echo '<h1>Reflection PDO</h1>';

$reflectionPdo = new ReflectionClass('PDO');

echo '<pre>';
print_r($reflectionPdo->getMethods());
echo '<hr>';
print_r($reflectionPdo->getProperties());