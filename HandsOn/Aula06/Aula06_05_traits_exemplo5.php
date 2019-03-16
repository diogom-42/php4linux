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
    
    public function validarDados($dados)
    {
        echo '<hr>Validando os dados... Metodo da Trait Validacao<hr>';
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

    public function validarDados($dados)
    {
        echo '<hr>Validando os dados... Metodo da Trait Banco<hr>';
    }
}


trait TodosAsTraits
{
    use Validacao, Banco{
        Banco::validarDados insteadOf Validacao;
    }
}


class Vendas
{  
    use TodosAsTraits;

    public function finalizar($dados)
    {
        $this->validarCartao(111111111111111);
        $this->validarCpfCnpj(42287456912);
        $this->validarDados($dados);
        $this->gravar($dados);
    }
}

$vendas = new Vendas();
$vendas->finalizar('dados');