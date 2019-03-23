<?php

class Usuarios
{
    protected $nome;
    protected $email;

    private function atribuir($atributo, $valor)
    {
        $atributo = strtolower($atributo);

        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        }
    }

    private function retornar($atributo)
    {
        $atributo = strtolower($atributo);

        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }

    public function __call($metodo, $atributos)
    {
        # pega os tres primeiros caracteres set ou get
        $prefix = substr($metodo, 0, 3);
        $nomeAtributo = substr($metodo, 3); //Pega o nome do atributo

        switch ($prefix) {
            case 'set':
                $this->atribuir($nomeAtributo, $atributos[0]);
                break;
            case 'get':
                return $this->retornar($nomeAtributo);    
                break;
            default:
                '<hr>Echo Metodo Inválido<hr>';
        }
    }

    public static function __callStatic($metodo, $atributos)
    {
        echo "Metodo $metodo foi chamado de forma estática, porem ele n existe os seguintes parametros foram passados";
        echo '<pre>';
        print_r($atributos);
        echo '<hr>';
    }
}

$usuario = new Usuarios();
$usuario->setNome('Diogo Moura');
Usuarios::listar('hublahubla');

echo 'Nome do Usuario: ' . $usuario->getNome();
echo '<br>Email do Usuario: ' . $usuario->getEmail() . '<hr>';

echo '<pre>';
var_dump($usuario);