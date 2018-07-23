<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto</title>
    </head>
    <body>
        <?php
         if (phpversion() >= 7.0):
            echo phpversion() . " - Olá mundo";
        else:
            echo phpversion() . " - Necessário atualizar o PHP";
        endif;
        
        echo "<hr>";
        echo ini_get('date.timezone') . "<br>";
        echo date('d/m/Y H:i:s') . "<br>";
        
        //para corrigir o horário vá em php-> phpini-> loclizar UTC-> Alterar em date.timezone para America/Sao_Paulo-> depois rennicializa
        ?>
    </body>
</html>
