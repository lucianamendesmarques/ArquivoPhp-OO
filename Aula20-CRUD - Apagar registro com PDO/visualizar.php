<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CRUD - Apagar registro com PDO</title>
    </head>
    <body>
        <h1>Visualizar usuário</h1>
        <a href="index.php">Listar</a><br><br>
        <?php
        require './Conn.php';
        
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        $limit = 1;
        $conn = new Conn();
        $result_user = "SELECT * FROM usuarios WHERE id=:id LIMIT :limit";
        
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado_user->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_user->execute();
        
        $row_user = $resultado_user->fetch(PDO::FETCH_ASSOC);
        echo "ID: " . $row_user['id'] . "<br>";
        echo "Nome: " . $row_user['nome'] . "<br>";
        echo "E-mail: " . $row_user['email'] . "<br>";
        echo "Usuário: " . $row_user['usuario'] . "<br>";
        echo "Inserido: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . "<br>";
        if(!empty($row_user['modified'])):
            echo "Alterado: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br>";
        endif;
        ?>
    </body>
</html>
