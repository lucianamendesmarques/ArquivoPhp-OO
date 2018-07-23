<?php

/**
 * Description of ClientePessoaFisica
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
class ClientePessoaFisica extends Cliente
{
    public $Cpf;
    public $Nome;
    
    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function verEndereco() {
        return "<p>Endereço da Pessoa Fisica.<br> Endereço: {$this->Endereco}<br>Bairro: {$this->Bairro}<br>Nome: {$this->Nome}<br>CPF: {$this->Cpf}<hr></p>";
    }
}
