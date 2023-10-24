<?php

class Cliente {
    //atributos
    private int $id;
    private string $nome;
    private string $telefone;
    private string $email;
    private date $dataCadastro;

    //metodos
    //Construtor

    // Construtor com valores pre-estabelecidos vazios
    function __construct(){
        $this->id = 0;
        $this->nome = "";
        $this->email = "";
        $this->telefone = "";
        $this->dataCadastro = "";
        echo "Criei um objeto da classe ".__CLASS__;
    }

   
    // Gets
    function GetId(){
        return $this->id;
    }

    //Sets
    function SetId(int $pId){
         $this->id = $pId;
    }
}

$cliente1 = new Cliente;