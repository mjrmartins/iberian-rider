<?php

$carousel = getCarouselMedia();

?>

<main class="container-fluid bg-dark px-0 py-0 my-0 mx-0 pb-2 text-light">

<div class="row mx-0 px-0 pt-3">
    <!-- Photos area -->
    <div class="col-10 mx-auto px-0 time text-center">
      Photo.
    </div>

    <div class="col-8 mx-auto px-0 t3 text-center">
      <?= getTextoFotos(); ?>
    </div>

    <!-- Carrossel -->
    <div class="col-10 col-md-6 mx-auto px-0 t3 mt-4 mb-3">
        <div class="row mx-0 px-0 d-flex gap-4 justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <?php foreach($carousel as $x => $c): ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $x; ?>" class="<?= ($x == 0) ? "active" : ""; ?>" aria-current="true" aria-label="Slide 1"></button>
                  <?php endforeach; ?>
                </div>
                <div class="carousel-inner">
                  <?php foreach($carousel as $x => $c): ?>
                    <div class="carousel-item <?= ($x == 0) ? "active" : ""; ?>">
                      <img src="<?= $c["imagem"]; ?>" class="d-block w-100 h-100" alt="media1">
                    </div>
                  <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

    <div class="col-8 mx-auto px-0 t3 mt-4 mb-3">
        <div class="row mx-0 px-0 d-flex gap-3 justify-content-center">
            <div class="col-10 col-md-3 mx-0 px-0">
              <img src="<?= getImagemPequena1Media(); ?>" alt="media4" class="w-100 h-100 ride" onclick="abrir1()">
            </div>
            <div class="col-10 col-md-3 mx-0 px-0">
              <img src="<?= getImagemPequena2Media(); ?>" alt="media5" class="w-100 h-100 ride" onclick="abrir2()"> 
            </div>
            <div class="col-10 col-md-3 mx-0 px-0">
              <img src="<?= getImagemPequena3Media(); ?>" alt="media6" class="w-100 h-100 ride" onclick="abrir3()">
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="janela-modal col-12 mx-0 px-0" id="janela-modal1">
      <img src="<?= getImagemPequena1Media(); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
      <button class="mt-2 mb-5 close">CLOSE</button>
    </div>

    <div class="janela-modal col-12 mx-0 px-0" id="janela-modal2">
      <img src="<?= getImagemPequena2Media(); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
      <button class="mt-2 mb-5 close">CLOSE</button>
    </div>

    <div class="janela-modal col-12 mx-0 px-0" id="janela-modal3">
      <img src="<?= getImagemPequena3Media(); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
      <button class="mt-2 mb-5 close">CLOSE</button>
    </div>
</div>

<div class="row mx-0 px-0 pt-3">
    <!-- Videos area -->
    <div class="col-10 mx-auto px-0 time text-center">
      Video.
    </div>

    <div class="col-8 mx-auto px-0 t3 text-center">
      <?= getTextoVideos(); ?>
    </div>

    <div class="col-8 mx-auto px-0 t3 mt-4 mb-3">
        <div class="row mx-0 px-0 d-flex gap-5 justify-content-center">
            <div class="col-10 mx-0 px-0 d-flex justify-content-center">
              <iframe width="560" height="315" src="<?= getVideo1(); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-10 mx-0 px-0 d-flex justify-content-center">
              <iframe width="560" height="315" src="<?= getVideo2(); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-10 mx-0 px-0 d-flex justify-content-center">
              <iframe width="560" height="315" src="<?= getVideo3(); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</main>