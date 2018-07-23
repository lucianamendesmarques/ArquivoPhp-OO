<?php

/**
 * Description of Usuario
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */
class Usuario {
    //a classe determina o comportamento dos objetos utilizando método(function) e atributos compara-se com uma váriavél.
    
    public $Nome;
    public $Email;
    
    //metodo
    
    function getDadosUser($Nome, $Email){
        return "o usuario {$Nome} tem o e-mail {$Email}";
        //deve criar um objeto em um arquivo html-perso->Aula4_Classes e Objetos para funionar de fazer um require, criando uma váriavle objeto
        
    }
}
