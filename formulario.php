<?php
    //session_start(); //iniciado sempre no inicio do código
    include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>
<body>
    <p><h1>Formulário de inscrição de competidor</h1></p>
    <!--Enriquecendo formulario com a validação de dados-->
    <form action="script.php" method="post">
        <?php
            //tratando a mensagem de sucesso
            $mensagemDeSucesso = obterMensagemSucesso();
            //isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
            } 
            //isset (espera um valor)> verifica se a variavel de sessão está iniciada 
            //utilizando operador ternario [[isset ...  ?  ... : ]]
            $mensagemDeErro = obterMensagemErro();
            //isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            }

        ?>
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor" /></p>
    </form>
</body>
</html>