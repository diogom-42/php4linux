<?php

abstract class Conta
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

    /**
     * Um metodo abstrato deve ser obrigatoriamente implementado na classe filha
     * @param string $dados
     */
    public abstract function gerarLog($dados);
}

class ContaPoupanca extends Conta
{
    public function gerarLog($dados)
    {
       echo "<hr>Gerando Log... Conta Poupança<hr>";
    }
}

class ContaCorrente extends Conta
{
    public function gerarLog($dados)
    {
       echo "<hr>Gerando Log... Conta Corrente<hr>";
    }
}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();

echo '<pre>';
var_dump($contaCorrente);
echo '<hr>';
var_dump($contaPoupanca);
echo '<hr>';


