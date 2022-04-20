<?php

class Institucional {
private $idInstitucional = '';
private   $nome     = "";
private   $cpf      = "";
private   $tipo     = "";
private   $endereco = "";
private   $bairro   = "";
private   $cidade   = "";
private   $uf       = "";
private   $cep      = "";
private   $logo     = "";
private   $telefone = "";
private   $email    = "";
    
    
    function __construct($nome, $cpf, $tipo, $endereco, $bairro, $cidade, $uf, $cep, $logo, $telefone, $email){
        $this->setNome($nome);
        $this->setCPF($cpf);
        $this->setTipo($tipo);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUF($uf);
        $this->setCEP($cep);
        $this->setLogo($logo);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        
     
        //include_once 'DBConnection.class.php';
        //$_insert  = "INSERT INTO usuario.ldi4(email, senha, nome, cpf, dtNasc, telefone) VALUES ('$email',, '$senha', '$nome', '$cpf', '$dtNasc', '$telefone');";      
       // $executa  = mysqli_query($conn, $_insert);
    }
    
    


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
        return $this;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setLogo($logo){
        $this->logo = $logo;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

}