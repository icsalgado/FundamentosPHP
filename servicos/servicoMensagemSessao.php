<?php
session_start();

function setarMensagemErro(string $mensagem) : void 
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string //para regatar a mensagem para ser recuperada num momento futuro - o ? serve como coringa para que possa retornar uma string ou null no caso
{
    if(isset($_SESSION['mensagem-de-erro'])) //verifica se a mensagem foi setada
        return $_SESSION['mensagem-de-erro']; //se sim retorna a mensagem
    
        return null; //caso contrario retorna null
}

function setarMensagemSucesso(string $mensagem) : void 
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string 
{
    if(isset($_SESSION['mensagem-de-sucesso'])) 
        return $_SESSION['mensagem-de-sucesso'];

    return null;
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['mensagem-de-erro'])) 
        unset($_SESSION['mensagem-de-erro']);//elimina a mensagem setada
}

function removerMensagemSucesso() : void
{
    if(isset($_SESSION['mensagem-de-sucesso'])) 
        unset($_SESSION['mensagem-de-sucesso']);
}


