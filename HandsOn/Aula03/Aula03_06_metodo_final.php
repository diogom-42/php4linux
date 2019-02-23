<?php

class Log
{
    public final function escrever($dados)
    //public function escrever($dados)
    {
        echo "<hr> Gerando Log... <br><br>$dados<br><br><hr>";
    }
}

class LogAlterado extends Log
{
    // public function escrever($dados)
    // {
    //     echo "<hr> Gerando Log... <hr>";
    // }  // -- erro!
}

$log = new LogAlterado();
$log->escrever('Teste!');