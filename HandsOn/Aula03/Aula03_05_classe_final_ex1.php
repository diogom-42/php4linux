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

final class ContaPoupanca extends Conta
{
    public function gerarLog($dados)
    {
       echo "<hr>Gerando Log... Conta Poupança<hr>$dados";
    }
}

final class ContaCorrente extends Conta
// class ContaCorrente extends Conta --erro
{
    public function gerarLog($dados)
    {
       echo "<hr>Gerando Log... Conta Corrente<hr>$dados";
    }
}

class ContaConjunta extends Conta
// class ContaConjunta extends ContaCorrente --erro
{
    public function gerarLog($dados)
    {
       echo "<hr>Gerando Log... Conta Corrente<hr>$dados";
    }
}

class ContaExtends extends Conta
{
    public function gerarLog($dados)
    {
       echo "<hr>Gerando Log... Conta Corrente<hr>$dados";
    }
}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();

$contaPoupanca->gerarLog('Deu erro - Poupança');
$contaCorrente->gerarLog('Deu erro - Corrente');

echo '<pre>';
var_dump($contaCorrente);
echo '<hr>';
var_dump($contaPoupanca);
echo '<hr>';


