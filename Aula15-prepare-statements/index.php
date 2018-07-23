<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Prepare- statements</title>
    </head>
    <body>
        <?php
        require './Conn.php';
        
        $conn = new Conn();
        $conn->getConn();    
        
        $email = "lucianamarques745@gmail.com";
        $usuario = "luciana";
        $senha = "123";
        try {            
            $result_cadastrar = "INSERT INTO usuarios (email, usuario, senha, created) VALUES (:email, :usuario, :senha, NOW())";
            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
            
            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
            
            $cadastrar->execute();
            
            if($cadastrar->rowCount()):
                echo "Cadastrado com sucesso";
            endif;
            
        } catch (Exception $ex) {
            
}
        
        ?>
    </body>
</html>
