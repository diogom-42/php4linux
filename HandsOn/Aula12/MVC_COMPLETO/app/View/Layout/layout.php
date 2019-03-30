<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Entendendo o padão MVC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <h1>Sistema MVC - Usuarios</h1>
    <a href="?rota=usuarios/cadastrar">NOVO USUARIO</a><br>
    <?php
    //$path = Controller/action;
    require "../app/View/$path.php";
    ?>
</body>
</html>