<?php
class OS {
    protected $titulo;
    protected $tipo;
    protected $descricao;
    protected $emissor;
    protected $receptor;
            
    function __construct($titulo, $tipo, $descricao, $emissor, $receptor) {
        $this->titulo = $titulo;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->emissor = $emissor;
        $this->receptor = $receptor;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function setEmissor($pessoa){
        $this->emissor = $pessoa;
    }
    
    public function setReceptor($pessoa) {
        $this->receptor = $pessoa;
    }
    
    public function getEmissor(){
        return $this->emissor;
    }
    
    public function getReceptor() {
        return $this->receptor;
    }

}
