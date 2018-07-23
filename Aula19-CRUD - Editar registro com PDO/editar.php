<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CRUD - Editar registro com PDO
</title>
    </head>
    <body>
        <h1>Editar Usuário</h1>
        <?php
        require './Conn.php';
        $conn = new Conn();

        //Editar usuario
        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //var_dump($Dados);
        if (!empty($Dados['SendEditUser'])):
            unset($Dados['SendEditUser']);
            $result_up_user = "UPDATE usuarios SET nome=:nome, email=:email, usuario=:usuario, senha=:senha, modified=NOW() WHERE id=:id";
            $resultado_up_user = $conn->getConn()->prepare($result_up_user);
            $resultado_up_user->bindParam(':nome', $Dados['nome']);
            $resultado_up_user->bindParam(':email', $Dados['email']);
            $resultado_up_user->bindParam(':usuario', $Dados['usuario']);
            $resultado_up_user->bindParam(':senha', $Dados['senha']);
            $resultado_up_user->bindParam(':id', $Dados['id']);

            //$resultado_up_user->execute();

            if ($resultado_up_user->execute()):
                echo "<p style='color:green;'>Registro editado com sucesso</p>";
            else:
                echo "<p style='color:red;'>Registro não foi editado</p>";
            endif;
        endif;


        //Pesquisado os dados do usuario
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        $limit = 1;
        $result_user = "SELECT * FROM usuarios WHERE id=:id LIMIT :limit";
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado_user->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_user->execute();
        $row_user = $resultado_user->fetch(PDO::FETCH_ASSOC);
        ?>

        <form name="EditUsuario" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row_user['id']; ?>">

            <label>Nome: </label>   
            <input type="text" name="nome" placeholder="Nome Completo" value="<?php echo $row_user['nome']; ?>"><br><br>

            <label>E-mail: </label>   
            <input type="email" name="email" placeholder="Seu melhor e-mail" value="<?php echo $row_user['email']; ?>"><br><br>

            <label>Usuário: </label>   
            <input type="text" name="usuario" placeholder="Usuário para acessar o sistema" value="<?php echo $row_user['usuario']; ?>"><br><br>

            <label>Senha: </label>   
            <input type="password" name="senha" placeholder="Senha"><br><br>

            <input type="submit" value="Editar" name="SendEditUser">
        </form>
    </body>
</html>
