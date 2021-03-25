<!--        Atividade - 01
    
    Escreva uma função que receba um vetor de inteiros como parâmetro e retorne a soma dos 
elementos. 

Teste a função exibindo o valor na tela. 
-->



<?php

    function somarInteiros(array $vetorInteiros){
        $soma = 0;
    
        foreach($vetorInteiros as $numero){
            $soma = $soma + $numero;
        }

        return $soma;

    }

    $inteiros = [10,50,90];

    echo somarInteiros($inteiros);

?>