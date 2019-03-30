<?php

require 'autoload.php';

use Lib\Banco;
use Entities\{UsuariosEntity, ClientesEntity};
use Model\{UsuariosModel, ClientesModel};

$banco = new Banco();
$entidadeUsuario = new UsuariosEntity();
$entidadeCliente = new ClientesEntity();

$usuarioModel = new UsuariosModel($banco, $entidadeUsuario);
$usuarioModel = new ClientesModel($banco, $entidadeCliente);