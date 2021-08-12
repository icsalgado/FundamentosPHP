<?php

function validaNome(string $nome) : bool //: bool é uma forma de tipar o retorno que a função ira fazer
{
    if(empty($nome)){ //empty verifica se a string está vazia
        setarMensagemErro('O nome não pode ser vazio, preencha-o novamente'); //substituida chamada direta para session por uma função
        //header ("location: formulario.php"); //o serviço prove apenas a ação e não precisa saber o local que irá redirecionar
        return false;
    }
    
    else if(strlen($nome)<3){//tamanho do nome não pode ser menor que 3
        setarMensagemErro('O nome precisa ter mais de 3 caracteres');
        //header ("location: formulario.php");
        return false;
    }
    
    else if(strlen($nome)>40){//nome não pode ser maior que 40
        setarMensagemErro('Nome muito extenso');
        //header ("location: formulario.php");
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade)){//verifica se é não é uma string numérica
        setarMensagemErro('idade inválida, insira um numero inteiro!');
        //header ("location: formulario.php");
        return false;
    }
    return true;
}




?>