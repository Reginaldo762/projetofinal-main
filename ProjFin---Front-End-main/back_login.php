<?php

if(isset($_POST['submit'])){
    
    //print_r($_POST['CPFcliente']);
    //print_r('<br>');

    //print_r($_POST['NomeCliente']);
    //print_r('<br>');

    //print_r($_POST['RG']);
    //print_r('<br>');

    //print_r($_POST['DataNasc']);
    //print_r('<br>');

    //print_r($_POST['Fone']);
    //print_r('<br>');

    //print_r($_POST['Email']);
    //print_r('<br>');

    //print_r($_POST['Senha']);
    //print_r('<br>');

    //print_r($_POST['Fone2']);
    //print_r('<br>');

    //print_r($_POST['uf']);

    include_once('conexao.php');

    $CPFcliente = $_POST['CPFcliente'];
    $NomeCliente = $_POST['NomeCliente'];
    $RG = $_POST['RG'];
    $DataNasc = $_POST['DataNasc'];
    $Fone = $_POST['Fone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $Fone2 = $_POST['Fone2'];
    $uf = $_POST['uf'];
   
    $result = mysqli_query($conn, "INSERT INTO cliente(CPFcliente, NomeCliente, RG, DataNasc, Fone, Email, Senha,
    Fone2, uf) VALUES ('$CPFcliente', '$NomeCliente', '$RG', '$DataNasc', '$Fone', '$Email', '$Senha', '$Fone2', '$uf')");
   
}

?>