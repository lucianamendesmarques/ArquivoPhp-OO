<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto</title>
    </head>
    <body>
        <?php
        //herança é quando a classe pai e a classe filha herda atributos da classe pai eas classe filhas são mais especificas
		
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';
        
        $cliente = new Cliente();
        $cliente->setEndereco('Av. Republica Argentina');
        $cliente->setBairro('Novo Mundo');
        echo $cliente->verEndereco();
        
        $clientePf = new ClientePessoaFisica();
        $clientePf->setCpf(54625487598);
        $clientePf->setNome('Luciana');
        $clientePf->setEndereco('Av. Republica');
        $clientePf->setBairro('Novo Mundo');
        echo $clientePf->verEndereco();
        
        $clientePj = new ClientePessoaJuridica();
        $clientePj->setCnpj('00.000.000/0000-00');
        $clientePj->setNomeFantasia('Luciana');
        $clientePj->setEndereco('Av. Republica ');
        $clientePj->setBairro('Novo Mundo');
        echo $clientePj->verEndereco();
        ?>
       
    </body>
</html>
