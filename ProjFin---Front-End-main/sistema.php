<?php
    session_start();
    print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and(!isset($_SESSION['Senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['Senha']);
        header('Location: entrar.php');
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <h1>Acesso</h1>
    
</body>
</html>