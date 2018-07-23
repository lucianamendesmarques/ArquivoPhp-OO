<?php

/**
 metodo final não pode reescrever nas classes filhas
 */
abstract class Cheque {
    public $Valor;
    public $Tipo;
    
    //metodo construct estara recebendo um valor
    function __construct($Valor,$Tipo ) {
       $this->Valor = $Valor;
       $this->Tipo = $Tipo;  
    }
    
    //o método que será abstrato sera clacularJuros estara indicando que todas as classes filhas sera obrigatorias a ter este método na classe filha (final class ChequeComum extends Cheque)
    
    abstract function calcularJuros();
      
    
    
    function verValor() {
        return "Valor do cheque comun {$this->Tipo}: R$ {$this->real($this->Valor)} <hr>";
    }
    
    //converter para o real
    //atribuir o metodo final na classe pai dara erro. tem que determinar uma classe 
   final function real($Valor) {
        return number_format($Valor, '2',',','.');
    }
}
