<?php

trait Validacao
{
    public function validarCpfCnpj($cpfOrCnpj)
    {
        echo '<hr>Validando CPF/CNPJ...<hr>';
    }

    public function validarCartao($nCartao)
    {
        echo '<hr>Validando Cartão...<hr>';
    }
}

trait Banco
{
    public function gravar($dados)
    {
        echo '<hr>Gravando dados no banco...<hr>';
    }

    public function consultar($id)
    {
        echo '<hr>Buscando o Registro...<hr>';
    }
}

class Vendas
{  
    use Validacao, Banco;

    public function finalizar($dados)
    {
        $this->validarCartao(111111111111111);
        $this->validarCpfCnpj(42287456912);
        $this->gravar($dados);

    }
}

$vendas = new Vendas();
$vendas->finalizar('dados');