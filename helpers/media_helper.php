<?php

function getCarouselMedia(){
    $resultado = selectSQL("SELECT * FROM media_carousel");
    return $resultado;
}

function getTextoFotos(){
    $resultado = selectSQLUnico("SELECT texto_fotos FROM media WHERE id=1");
    return $resultado["texto_fotos"];
}

function getImagemPequena1Media(){
    $resultado = selectSQLUnico("SELECT imagem_pequena1 FROM media WHERE id=1");
    return $resultado["imagem_pequena1"];
}

function getImagemPequena2Media(){
    $resultado = selectSQLUnico("SELECT imagem_pequena2 FROM media WHERE id=1");
    return $resultado["imagem_pequena2"];
}

function getImagemPequena3Media(){
    $resultado = selectSQLUnico("SELECT imagem_pequena3 FROM media WHERE id=1");
    return $resultado["imagem_pequena3"];
}

function getTextoVideos(){
    $resultado = selectSQLUnico("SELECT texto_videos FROM media WHERE id=1");
    return $resultado["texto_videos"];
}

function getVideo1(){
    $resultado = selectSQLUnico("SELECT video1 FROM media WHERE id=1");
    return $resultado["video1"];
}

function getVideo2(){
    $resultado = selectSQLUnico("SELECT video2 FROM media WHERE id=1");
    return $resultado["video2"];
}

function getVideo3(){
    $resultado = selectSQLUnico("SELECT video3 FROM media WHERE id=1");
    return $resultado["video3"];
}

?>