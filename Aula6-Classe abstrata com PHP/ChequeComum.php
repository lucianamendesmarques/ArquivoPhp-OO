<?php

/**
 * Description of ChequeComun
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
class ChequeComum extends Cheque{
    
    function calcularJuros() {
        $this->Valor = $this->Valor * 1.25;
        $this->Valor = parent::real($this->Valor);
        return "Valor do cheque {$this->Tipo}: R$ {$this->Valor}<hr>";
    }
}
