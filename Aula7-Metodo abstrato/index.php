<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto-Classe abstrata com PHP</title>
    </head>
    <body>
        <?php
          require './Cheque.php';
          require './ChequeComum.php';
          require './ChequeEspecial.php';
          //a classe abstrata não pode ser instanciada
          //$cheque = new Cheque(100.10, "comum");
          //echo $cheque->verValor();
          
               $chequeComum = new ChequeComum(100.10, "comum");
        echo $chequeComum->calcularJuros();
        
         $chequeEspecial = new ChequeEspecial(100.10, "especial");
        echo $chequeEspecial->calcularJuros();
        ?>
    </body>
</html>
