<!--        Atividade - 03

Escreva uma função que receba um vetor e imprima na tela os valores em ordem invertida.

Nota: Não vale usar o print_r para mostrar os valores, a ideia aqui é exercitar a lógica. 

Exemplo: 

entrada: ["Olá", 1, 2, "Trinta"]; 

saída: ["Trinta", 2, 1, "Olá"]; 
-->

<?php

    $vetor = ["Maria","João",100,"Emerson"];

    function inverteVetor($vetor){
       
        for($i = (count($vetor) -1); $i> = 0;$i--){

            echo $vetor[$i];
        }
    }
        

?>