<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto</title>
    </head>
    <body>
        <?php
        // atoload = responsável em carrega as classes
 
        // dentro da pasta core criar uma classe -> config controller
        require './vendor/autoload.php';
        
        use Core\ConfigController as Home;
        $Url = new Home();
        //metodo carregar no configcontroller
        $Url->carregar();
        ?>
    </body>
</html>
