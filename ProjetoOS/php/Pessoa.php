<?php
class Pessoa {
    protected $nome;
    protected $cargo;
    protected $setor;
    protected $cpf;
    protected $enviadas = array();
    protected $entrada = array();
            
    function __construct($nome, $cargo, $setor, $cpf) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->setor = $setor;
        $this->cpf = $cpf;
    }
    
    function getNome() {
        return $this->nome;     
    }  
    
    function getCargo() {
        return $this->cargo;
    }

    function getSetor() {
        return $this->setor;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }
    
    function setCPF($cpf) {
        $this->cpf = $cpf;
    }
    
    function getCPF() {
        return $this->cpf;;
    }

    public function setEnviadas($env) {
        array_push($this->enviadas, $env);
    }
    
    public function setEntrada($ent) {
        array_push($this->enviadas, $ent);
    }
    
    public function getEnviadas($index) {
        return $this->enviadas[$index];
    }
    
    public function getEntrada($index) {
        return $this->entrada[$index];
    }

}
