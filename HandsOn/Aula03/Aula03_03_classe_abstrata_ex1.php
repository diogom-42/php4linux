<?php

abstract class Conta
// class Conta
{
    public $saldo = 0;
    public $titular;

    /**
     * Metodo p/ fazer um saque
     * @param float $valor
     */
    public function sacar($valor)
    {
        # code...
        $this->saldo -= $valor;
    }

    /**
     * Metodo para fazer depósito
     * @param float $valor
     */
    public function depositar($valor)
    {
        # code...
        $this->saldo += $valor;
    }

    /**
     * Retorna o saldo atual
     * @return float $saldo
     */
    public function verSaldo(): float
    {
        # code...
        return $this->saldo;

    }
}

class ContaPoupanca extends Conta
{}

class ContaCorrente extends Conta
{}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();
// $conta = new Conta();

echo '<pre>';
var_dump($contaCorrente);
echo '<hr>';
var_dump($contaPoupanca);
// echo '<hr>';
// var_dump($conta);
// echo '<hr>';

