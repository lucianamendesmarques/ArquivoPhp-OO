<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './vendor/autoload.php';
        
        use Core\ConfigController as Home;
        $Url = new Home();
        $Url->carregar();
        ?>
    </body>
</html>
