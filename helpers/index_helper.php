<?php

function getCarouselHome(){
    $resultado = selectSQL("SELECT * FROM home_carousel");
    return $resultado;
}

function getTituloHome(){
    $resultado = selectSQLUnico("SELECT titulo FROM home WHERE id=1");
    return $resultado["titulo"];
}

?>