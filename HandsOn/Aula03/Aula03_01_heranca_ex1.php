<?php

class Conta
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
{
    public $aniversario = 6;

    public function aplicar($valor)
    {
        echo '<hr>Aplicação efetuada <b>$valor</b> <ht>';
        $this->depositar($valor);
    }
}

class ContaPoupancaConjunta extends ContaPoupanca
{}

$conta = new Conta();
$conta->depositar(1200);

$contaPoupanca = new ContaPoupanca();
$contaPoupanca->depositar(2000);

$contaPoupancaConjunta = new ContaPoupancaConjunta();
$contaPoupancaConjunta->aplicar(100);

echo '<pre>';
var_dump($conta);
var_dump($contaPoupanca);
echo '<hr>';
var_dump($contaPoupancaConjunta);
echo '<hr>';
echo 'Saldo conta conjunta: ' . $contaPoupancaConjunta->verSaldo();