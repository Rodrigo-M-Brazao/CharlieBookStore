<html>
    <head>
        <title>Listar os Administradores</title>
    </head>
    <body>
        <h1>Listar os Administradores</h1>
        <br>
    <?php
        include 'start-mysql.php';

        //Monta o comando de inserção
        $cmd = $pdo->query("SELECT * FROM ADMINISTRADOR") ;
    ?>

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Atualizacao</th>
                <th>Exclusao</th>
            </tr>
    <?php
        //Lista os Admins
        while($linha = $cmd->fetch()) { 
    ?>
        <tr>
            <td>
                <?php
                    echo $linha["ADM_ID"];
                ?>
            </td>
            <td>
                <?php
                    echo $linha["ADM_NOME"];         
                ?>
            </td>
            <td>
                <?php
                    echo $linha["ADM_EMAIL"]; 
                ?>
            </td>    
            <td>
                <?php
                    echo $linha["ADM_SENHA"];
                ?>
            </td>    
            <td>
                <!-- <a href="atualizarform.php?id=<?php echo $linha["ADM_ID"] ?>">Atualizar</a> -->
            </td>
            <td>
                <!-- <a href="excluirform.php?id=<?php echo $linha["ADM_ID"] ?>">Excluir</a> -->
            </td>        
        </tr>
    <?php
        } //while($linha = $cmd->fetch());
    ?> 
        </table>
        <br>
        <a href="login-adm.html">Voltar para o Indice</a>    
    </body>
    </html>
