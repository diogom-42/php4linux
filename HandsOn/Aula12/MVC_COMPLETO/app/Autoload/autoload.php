<?php

spl_autoload_register(function ($classe){
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);

    $classe = "../app/$classe.php";

    if(!file_exists($classe)){
       require $classe;       
    } else {
        echo '<h1>Arquivo n encontrado</h1>' . $classe;
    }
});