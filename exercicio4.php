<?php

function deletarElemento($vetor, $deletar){

    foreach($vetor as $chave => $del){

        if($del == $deletar){
            unset($veto[$chave]);

            return $vetor;
        }
    }
    return false;
}

$vetor = [1,56,9, "Emerson", "Juaum"];

$novoVetor = deletarElemento($vetor, "Emerson");

print_r($novoVetor);
?>