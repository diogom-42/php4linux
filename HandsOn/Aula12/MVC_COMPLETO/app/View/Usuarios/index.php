<?php

foreach ($dados as $usuario):
?>
<br>
<b>Id: </b><?=$usuario['id']?><br>
<b>Nome: </b><?=$usuario['nome']?><br>
<b>Email: </b><?=$usuario['email']?><br>
<a href="?rota=usuarios/alterar/<?=$usuario['id'] ?>"> Alterar </a> | 
<a href="?rota=usuarios/excluir/<?=$usuario['id'] ?>"> Excluir </a> | 
<hr>
<?php
endforeach;
?>