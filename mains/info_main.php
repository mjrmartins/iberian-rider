<main class="container-fluid bg-dark px-0 py-0 my-0 mx-0 pb-2 text-light">

<div class="row mx-0 px-0">
    <div class="col-12 mx-0 px-0">
        <img src="<?= getImagemGrande(); ?>" alt="imagem_info" class="w-100">
    </div>

    <!-- Information area -->
    <div class="col-10 mx-auto px-0 time text-center">
      <?= getTituloInfo(); ?>
    </div>

    <div class="col-8 mx-auto mt-3 px-0 t3 justify">
      <?= getTextoInfo(); ?>
    </div>

    <div class="col-8 mx-auto px-0 t3 mt-5 mb-3">
        <div class="row mx-0 px-0 d-flex gap-4 justify-content-center">
            <div class="col-10 col-md-3 mx-0 px-0">
                <img src="<?= getImagemPequena1(); ?>" alt="imagem1" class="w-100 h-100 ride" onclick="abrir1()" id="image1">
            </div>
            <div class="col-10 col-md-3 mx-0 px-0">
                <img src="<?= getImagemPequena2(); ?>" alt="imagem2" class="w-100 h-100 ride" onclick="abrir2()" id="image2"> 
            </div>
            <div class="col-10 col-md-3 mx-0 px-0">
                <img src="<?= getImagemPequena3(); ?>" alt="imagem3" class="w-100 h-100 ride" onclick="abrir3()" id="image3">
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="janela-modal col-12 mx-0 px-0" id="janela-modal1">
        <img src="<?= getImagemPequena1(); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
        <button class="mt-2 mb-5 close">CLOSE</button>
    </div>

    <div class="janela-modal col-12 mx-0 px-0" id="janela-modal2">
        <img src="<?= getImagemPequena2(); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
        <button class="mt-2 mb-5 close">CLOSE</button>
    </div>

    <div class="janela-modal col-12 mx-0 px-0" id="janela-modal3">
        <img src="<?= getImagemPequena3(); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
        <button class="mt-2 mb-5 close">CLOSE</button>
    </div>
</div>
</main>