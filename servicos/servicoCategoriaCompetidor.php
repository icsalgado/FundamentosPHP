<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    removerMensagemErro();
    $categorias = [];
    $categorias [] = 'infantil';
    $categorias [] = 'adolecente';
    $categorias [] = 'adulto';

    if(validaNome($nome) && validaIdade($idade))//verifica se nome e idade foram validados
    {
        if ($idade >= 6 && $idade <= 12){
            setarMensagemSucesso("O nadador $nome compete na categoria infantil"); //criada a chave no array de sessão da mensagem de sucesso
            //header ("location: formulario.php");
            return null;
        }
        
        else if ($idade >= 13 && $idade <= 18){
            setarMensagemSucesso("O nadador $nome compete na categoria adolescente");
            //header ("location: formulario.php");
            return null;
        }
        else {
            setarMensagemSucesso("O nadador $nome compete na categoria adulto");
            //header ("location: formulario.php");
            return null;
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }

}