<?php

$carousel = getCarouselHome();

$travels = getTodosTravels();

?>

<main class="container-fluid bg-dark px-0 py-0 my-0 mx-0 pb-2">
  <div class="col-12 mx-0 px-0" id="modal1">
    <div class="col-8 mx-auto px-0 pt-4">
      <h1 id="h1cookies">cookies</h1>
      <p id="pcookies">this website does not collect or use cookies</p>
      <button class="mt-2 mb-5 close" onclick="fecharCookies()">CLOSE</button>
    </div>
  </div>

    <!-- Carousel -->
    <div class="row px-0 mx-0">
      <div class="col-12 px-0 mx-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php foreach($carousel as $x => $c): ?>
              <div class="carousel-item <?= ($x == 0 ? "active" : ""); ?>">
              <img src="<?= $c["imagem"]; ?>" class="d-block w-100" alt="imagem1">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Time -->
    <div class="row d-none d-sm-block mx-0 px-0 caixa-time w-100">
      <div class="col-10 m-auto time text-center">
        <?= getTituloHome(); ?>
      </div>
      <div class="col-10 m-auto time mt-md-3 text-center">
        <a href="#" id="arrow1" onclick="clickArrow()"></a>
      </div>
    </div>

    <!-- Time mobile -->
    <div class="row d-flex d-sm-none mx-0 px-0 w-100 align-items-center">
      <div class="col-10 m-auto text-center text-light t1 pt-5 pb-0">
        <?= getTituloHome(); ?>
      </div>
    </div>

    <!-- Cards -->
    <div class="row mx-0 px-0 py-5 mt-sm-5 caixa-cards d-flex justify-content-center gap-5" id="cardbox">

      <?php foreach($travels as $t): ?>
        <div class="card col-10" style="max-width: 740px;">
          <div class="row">
            <div class="col-12 col-md-5 mx-0 px-0">
              <img src="<?= getImagem1Travel($t["id"]); ?>" class="img-fluid w-100 h-100" alt="image_travel">
            </div>
            <div class="col-12 col-md-7">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title t4 text-light"><?= getTituloTravel($t["id"]); ?>.</h5>
                <p class="card-text t3 text-justify text-light"><?= getTextoAbreviadoTravel($t["id"]); ?></p>
                <hr class="hr-card mt-0">
                <form action="travel.php" class="align-self-end">
                  <button class="button-more text-dark p-1 ps-2 pe-2" name="id" value="<?= $t["id"]; ?>">SHOW MORE</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </main>