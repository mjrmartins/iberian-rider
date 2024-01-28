<?php

$form = isset($_GET["id"]);

if($form){
  $id = $_GET["id"];
}
else{
  header("Location: index.php");
  exit();
}

?>

<main class="container-fluid bg-dark px-0 py-0 my-0 mx-0 pb-2 text-light">

<div class="row mx-0 px-0 pt-5 pb-4">
    <!-- Travel area -->
    <div class="col-9 mx-auto px-0 text-center travel">
      <p class="t1 mt-3 mb-0 pb-0"><?= getTituloMoto($id); ?>.</p>
      <div class="row mx-0 px-0">
        <div class="col-8 mx-auto">
          <hr class="hr-card">
        </div>
      </div>

      <div class="row mx-0 px-0 mt-4">
        <div class="row mx-0 px-0 d-flex gap-4 justify-content-center">
          <div class="col-10 col-md-3 mx-0 px-0">
            <img src="<?= getImagem1Moto($id); ?>" alt="image1" class="w-100 h-100 ride" onclick="abrir1()">
          </div>
          <div class="col-10 col-md-3 mx-0 px-0">
            <img src="<?= getImagem2Moto($id); ?>" alt="image2" class="w-100 h-100 ride" onclick="abrir2()"> 
          </div>
          <div class="col-10 col-md-3 mx-0 px-0">
            <img src="<?= getImagem3Moto($id); ?>" alt="image3" class="w-100 h-100 ride" onclick="abrir3()">
          </div>
        </div>
      </div>

      <!-- MODAL -->
      <div class="col-12 mx-0 px-0 d-flex justify-content-center align-items-center">
        <div class="janela-modal2 col-12 mx-0 px-0" id="janela-modal1">
          <img src="<?= getImagem1Moto($id); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
          <button class="mt-2 mb-5 close">CLOSE</button>
        </div>

        <div class="janela-modal2 col-12 mx-0 px-0" id="janela-modal2">
          <img src="<?= getImagem2Moto($id); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
          <button class="mt-2 mb-5 close">CLOSE</button>
        </div>

        <div class="janela-modal2 col-12 mx-0 px-0" id="janela-modal3">
          <img src="<?= getImagem3Moto($id); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
          <button class="mt-2 mb-5 close">CLOSE</button>
        </div>
      </div>


      <div class="row mx-0 px-0 mt-4">
        <div class="col-10 mx-auto">
          <p class="t3 mb-0 pb-0 justify">
            <?= getTexto1Moto($id); ?>
          </p>
        </div>
      </div>

      <div class="row mx-0 px-0 mt-4">
        <div class="row mx-0 px-0 d-flex gap-4 justify-content-center">
          <div class="col-10 col-md-3 mx-0 px-0">
            <img src="<?= getImagem4Moto($id); ?>" alt="image4" class="w-100 h-100 ride" onclick="abrir4()">
          </div>
          <div class="col-10 col-md-3 mx-0 px-0">
            <img src="<?= getImagem5Moto($id); ?>" alt="image5" class="w-100 h-100 ride" onclick="abrir5()"> 
          </div>
          <div class="col-10 col-md-3 mx-0 px-0">
            <img src="<?= getImagem6Moto($id); ?>" alt="image6" class="w-100 h-100 ride" onclick="abrir6()">
          </div>
        </div>
      </div>

      <!-- MODAL -->
      <div class="col-12 mx-0 px-0 d-flex justify-content-center align-items-center">
        <div class="janela-modal2 col-12 mx-0 px-0" id="janela-modal4">
          <img src="<?= getImagem4Moto($id); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
          <button class="mt-2 mb-5 close">CLOSE</button>
        </div>

        <div class="janela-modal2 col-12 mx-0 px-0" id="janela-modal5">
          <img src="<?= getImagem5Moto($id); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
          <button class="mt-2 mb-5 close">CLOSE</button>
        </div>

        <div class="janela-modal2 col-12 mx-0 px-0" id="janela-modal6">
          <img src="<?= getImagem6Moto($id); ?>" alt="imagem1" class="w-50 mt-5 img-modal">
          <button class="mt-2 mb-5 close">CLOSE</button>
        </div>
      </div>


      <div class="row mx-0 px-0 mt-4 mb-4">
        <div class="col-10 mx-auto">
          <p class="t3 mb-0 pb-0 justify">
            <?= getTexto2Moto($id); ?>
          </p>
        </div>
      </div>
    </div>
   
</div>

</main>