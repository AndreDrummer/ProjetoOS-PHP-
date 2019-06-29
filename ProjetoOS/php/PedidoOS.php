<?php
require_once 'Pessoa.php';
require_once 'OS.php';
class PedidoOS {                       
    
    public function enviarOS($emissor, $receptor, $os){     
        echo "
        <div class='container box>
            <div class='row'>                
                <div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>Pronto!</h4>
                    <h5>OS aberta com sucesso de $emissor para <b>$receptor.</b>Aguarde retorno!</h5>
                    <hr>
                    <p class='mb-0'>OS: ".$os->getTitulo()."<br/>Destino: $receptor<br/>Descrição: ".$os->getDescricao()."</p>
                </div>               
            </div>
        </div>";                          
    }
}