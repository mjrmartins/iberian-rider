<?php

function getTodosTravels(){
    $resultado = selectSQL("SELECT * FROM travels");
    return $resultado;
}

function getTituloTravel($id){
    $resultado = selectSQLUnico("SELECT titulo FROM travels WHERE id=$id");
    return $resultado["titulo"];
}

function getDataTravel($id){
    $resultado = selectSQLUnico("SELECT data_viagem FROM travels WHERE id=$id");
    return $resultado["data_viagem"];
}

function getImagem1Travel($id){
    $resultado = selectSQLUnico("SELECT imagem1 FROM travels WHERE id=$id");
    return $resultado["imagem1"];
}

function getImagem2Travel($id){
    $resultado = selectSQLUnico("SELECT imagem2 FROM travels WHERE id=$id");
    return $resultado["imagem2"];
}

function getImagem3Travel($id){
    $resultado = selectSQLUnico("SELECT imagem3 FROM travels WHERE id=$id");
    return $resultado["imagem3"];
}

function getTexto1Travel($id){
    $resultado = selectSQLUnico("SELECT texto1 FROM travels WHERE id=$id");
    return $resultado["texto1"];
}

function getTextoAbreviadoTravel($id){
    $resultado = substr(getTexto1Travel($id), 0, 150) . "...";
    return $resultado;
}

function getImagem4Travel($id){
    $resultado = selectSQLUnico("SELECT imagem4 FROM travels WHERE id=$id");
    return $resultado["imagem4"];
}

function getImagem5Travel($id){
    $resultado = selectSQLUnico("SELECT imagem5 FROM travels WHERE id=$id");
    return $resultado["imagem5"];
}

function getImagem6Travel($id){
    $resultado = selectSQLUnico("SELECT imagem6 FROM travels WHERE id=$id");
    return $resultado["imagem6"];
}

function getTexto2Travel($id){
    $resultado = selectSQLUnico("SELECT texto2 FROM travels WHERE id=$id");
    return $resultado["texto2"];
}

function getDropTravels(){
    $resultado = selectSQL("SELECT id, titulo FROM travels ORDER BY titulo ASC");
    return $resultado;
}

?>