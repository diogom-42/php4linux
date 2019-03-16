<?php

class Contas
{
    protected $titular;
    protected $saldo = 0;

    public function __construct(Titular $titular)
    {
        echo '<hr> Executando o construtor Automaticamente <hr>';
        $this->titular = $titular;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
    
    public function verSaldo()
    {
        return $this->saldo;
    }
    
    public function getTitular()
    {
        return $this->titular;
    }

    public function __destruct()
    {
        echo '<hr> Metodo <b> ' . __METHOD__ . '</b> Executando na classe: <b>' . __CLASS__ . '</b><hr>';
    }
}

class Titular
{
    public $nome;
    public $cpf;

    public function __destruct()
    {
        echo '<hr> Metodo <b> ' . __METHOD__ . '</b> Executando na classe: <b>' . __CLASS__ . '</b><hr>';
    }
}

$titular = new Titular();
$titular->nome = 'Luciana Lima';
$titular->cpf = '292.588.639-89';

$conta = new Contas($titular);

unset($conta);
// unset($titular);

echo 'Destruído com sucesso!';
// $titular = new Titular();
// $titular->nome = 'Luciana Oliveira';
// $titular->cpf = '292.588.639-89';

// // echo 'Titular: ' . $conta->getTitular()->nome;
// // echo '<br>CPF Titular: ' . $conta->getTitular()->cpf;