<?php
session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['Senha']))
    {
        
        include_once('conexao.php');
        $Email = $_POST['email'];
        $senha = $_POST['Senha'];

        //print_r('email: ' . $Email);
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM cliente WHERE Email = '$Email' and Senha = '$senha'";

        $result = $conn->query($sql);

        //print_r($sql);
        //print_r($result);

            if(mysqli_num_rows($result) < 1)
            {
                unset($_SESSION['email']);
                unset($_SESSION['Senha']);
                header('Location: entrar.php');
            }

            else
            {
                $_SESSION['email'] = $Email;
                $_SESSION['Senha'] = $senha;
                header('Location: sistema.php');
            }

    }
    else{
       header('Location: testelogin.php');
    }


?>