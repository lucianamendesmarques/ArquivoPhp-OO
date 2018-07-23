<?php

/**
 * Description of Cheque
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
abstract class Cheque {
    public $Valor;
    public $Tipo;
    
    //metodo construct estara recebendo um valor
    function __construct($Valor,$Tipo ) {
       $this->Valor = $Valor;
       $this->Tipo = $Tipo;  
    }
    
    //o método que será abstrato sera clacularJuros estara indicando que todas as classes filhas sera obrigatorias a ter este método
    
    abstract function calcularJuros();
            
    function verValor() {
        return "Valor do cheque comun {$this->Tipo}: R$ {$this->real($this->Valor)} <hr>";
    }
    
    //converter para o real
    function real($Valor) {
        return number_format($Valor, '2',',','.');
    }
}
