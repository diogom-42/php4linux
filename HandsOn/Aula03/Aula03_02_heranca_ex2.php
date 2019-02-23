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

class ContaCorrente extends Conta
{
      public function sacar($valor)
    {
        echo "<hr>Saque efetuado <b>valor: $valor</b> <hr>";
        //O parent faz referencia a classe Pai
        parent::sacar($valor);
    }
}

$conta = new Conta();
$conta->depositar(2500);
$conta->sacar(200);
echo '<hr>';
$contaCorrente = new ContaCorrente();
$contaCorrente->depositar(2500);
$contaCorrente->sacar(800);
echo '<hr>';
echo 'Saldo em Conta: ' . $conta->verSaldo();
echo '<br>';
echo 'Saldo em Conta Corrente: ' . $contaCorrente->verSaldo();
