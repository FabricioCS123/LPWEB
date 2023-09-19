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
    function Cliente(){
        $this->id = 0;
        $this->nome = "";
        $this->email = "";
        $this->telefone = "";
        $this->dataCadastro = "";
    }

    function Cliente(int $pId, string $pNome, string $pTelefone, string $pEmail, string $pCadastro){
        $this->id = $pId;
        $this->nome = $pNome;
        $this->email = $pEmail;
        $this->telefone = $pTelefone;
        $this->dataCadastro = $pCadastro;
    }

    // Gets
    function GetId(){
        return $this->id;
    }

    //Sets
    function SetId(){
        return $this->id;
    }
}