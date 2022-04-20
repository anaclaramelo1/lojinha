<?php

if ($_POST) {
    
    //include_once 'DBConnection.class.php';
    //include_once 'institucial.class.php';
    
    $nome     = $_REQUEST['nome'];
    $cpf      = $_REQUEST['cpf'];
    $tipo     = $_REQUEST['tipo'];
    $endereco = $_REQUEST['endereco'];
    $bairro   = $_REQUEST['bairro'];
    $cidade   = $_REQUEST['cidade'];
    $uf       = $_REQUEST['uf'];
    $cep      = $_REQUEST['cep'];
    $logo     = $_REQUEST['logo'];
    $telefone = $_REQUEST['fone'];
    $email    = $_REQUEST['email'];
    
    //$usuario = new Usuario();
    
    echo 'Cadastrado ccm sucesso!';
} else {
    echo 'Erro no cadastramento!';
}
?>