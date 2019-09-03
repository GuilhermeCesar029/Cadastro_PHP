<?php
    session_start(); //iniciar sessao para buscar a variavel do processo.php
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema de Cadastro</title>
    </head>
    <body>
        <h1>Cadastrar Usuarios</h1>
        <?php
            //isset Informa se a variável foi iniciada
            if(isset($_SESSION['msg'])){//se existir essa variavel entao 
                echo $_SESSION['msg']; //imprima a mensagem
                unset($_SESSION['msg']); //apaga a mensagem
            }
        ?>
        <form name="cadastro" method="POST" action="processo.php">
            <label>Nome:</label>  
            <input type="text" name="nome" placeholder="Digite seu nome completo" /> <br/><br/>
            <label>email:</label>  
            <input type="email" name="email" placeholder="Digite seu email principal" /> <br/><br/>
            <input type="submit" value="Cadastrar">
                    
        </form>    
    </body>
    
    
</html>