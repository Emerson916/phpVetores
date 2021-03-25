<!--    Atividade - 02

Escreva uma função que recebe dois parâmetros, um vetor de nomes e um nome específico.

A função deve procurar o nome no vetor, se encontrar retornar true, caso contrário, retornar 
false. 

Teste a função exibindo o valor na tela. 

-->

<?php

    function exibirNomes (array $nomes ,$especifico){

        foreach ($nomes as $algumacoisa) {
           if ($algumacoisa == $especifico) {
               return true;
           }
        }
        return false;
    }

    $pessoas = ["Jorge","Augustinho" ,"Thais" ,"Emerson"];

    echo exibirNomes($pessoas, "Emerson");

?>