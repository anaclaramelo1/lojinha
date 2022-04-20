<?php

if ($_POST) {
    
    //include_once 'DBConnection.class.php';
    //include_once 'institucial.class.php';
    
    $descricao    = $_REQUEST['descricao'];
    
    //$usuario = new Usuario();
    
    echo 'Cadastrado ccm sucesso!';
} else {
    echo 'Erro no cadastramento!';
}
?>