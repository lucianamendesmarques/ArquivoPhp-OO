<?php

/**
 * Description of Usuario
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
class Usuario {
    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;
            
    function setUsuario($Nome, $Email){
        //function atribui comportamento para a variavel
        //$this estara recebendo o paramento o que é exclusivo do método.
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    function getUsuario(){
        return "Nome do usuario: {$this->Nome}. <br>E-mail:{$this->Email}.<br>";
    }
    
    function setNota($Prova, $Trabalho){
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;   
    }
    function getNota(){
        return "Nota: ". ($this->Prova + $this->Trabalho);
    }
}
