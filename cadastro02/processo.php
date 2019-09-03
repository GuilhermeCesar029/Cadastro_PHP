<?php
    session_start(); //iniciando sessao
    include_once("conexaobd.php");
    
    //filter_input é para uma variavel expecifica.
    //ex: nome : string; 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    //inserir os dados na tabela do banco de dados
    //NOW() retorna a data e hora atual
    //mysqli_query envia uma consulta ao MySql
    $usuarios ="INSERT INTO usuarios(nome, email, created) VALUES ('$nome', '$email', NOW())";
    $Resultado_usuarios = mysqli_query($cone, $usuarios);
    
    //condiçao para volta a pagina inicial(index.php)
    if(mysqli_insert_id($cone)){
        header("location: index.php");
        $_SESSION['msg'] = "<p style = 'color:red;'> Usuario cadastrado com sucesso!</p>"; //criando variavel para mandar para a pag inicial(index.php)
    }
    else{
        header("location: index.php");
        $_SESSION['msg'] = "<p style = 'color:red;'> Usuario NAO cadastrado com sucesso!</p>";
    }

?>