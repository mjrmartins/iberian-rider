<?php

function getDropMoto(){
    $resultado = selectSQL("SELECT id, titulo FROM motorcycles ORDER BY titulo ASC");
    return $resultado;
}

function getTituloMoto($id){
    $resultado = selectSQLUnico("SELECT titulo FROM motorcycles WHERE id=$id");
    return $resultado["titulo"];
}

function getImagem1Moto($id){
    $resultado = selectSQLUnico("SELECT imagem1 FROM motorcycles WHERE id=$id");
    return $resultado["imagem1"];
}

function getImagem2Moto($id){
    $resultado = selectSQLUnico("SELECT imagem2 FROM motorcycles WHERE id=$id");
    return $resultado["imagem2"];
}

function getImagem3Moto($id){
    $resultado = selectSQLUnico("SELECT imagem3 FROM motorcycles WHERE id=$id");
    return $resultado["imagem3"];
}

function getTexto1Moto($id){
    $resultado = selectSQLUnico("SELECT texto1 FROM motorcycles WHERE id=$id");
    return $resultado["texto1"];
}

function getImagem4Moto($id){
    $resultado = selectSQLUnico("SELECT imagem4 FROM motorcycles WHERE id=$id");
    return $resultado["imagem4"];
}

function getImagem5Moto($id){
    $resultado = selectSQLUnico("SELECT imagem5 FROM motorcycles WHERE id=$id");
    return $resultado["imagem5"];
}

function getImagem6Moto($id){
    $resultado = selectSQLUnico("SELECT imagem6 FROM motorcycles WHERE id=$id");
    return $resultado["imagem6"];
}

function getTexto2Moto($id){
    $resultado = selectSQLUnico("SELECT texto2 FROM motorcycles WHERE id=$id");
    return $resultado["texto2"];
}

?>