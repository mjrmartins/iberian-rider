<?php

function getImagemGrande(){
    $resultado = selectSQLUnico("SELECT imagem_grande FROM info WHERE id=1");
    return $resultado["imagem_grande"];
}

function getTituloInfo(){
    $resultado = selectSQLUnico("SELECT titulo_info FROM info WHERE id=1");
    return $resultado["titulo_info"];
}

function getTextoInfo(){
    $resultado = selectSQLUnico("SELECT texto_info FROM info WHERE id=1");
    return $resultado["texto_info"];
}

function getImagemPequena1(){
    $resultado = selectSQLUnico("SELECT imagem_pequena1 FROM info WHERE id=1");
    return $resultado["imagem_pequena1"];
}

function getImagemPequena2(){
    $resultado = selectSQLUnico("SELECT imagem_pequena2 FROM info WHERE id=1");
    return $resultado["imagem_pequena2"];
}

function getImagemPequena3(){
    $resultado = selectSQLUnico("SELECT imagem_pequena3 FROM info WHERE id=1");
    return $resultado["imagem_pequena3"];
}

?>