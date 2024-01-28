<?php
ob_start();

$travels = getDropTravels();

$motos = getDropMoto();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iberian Rider</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- CSS Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JS -->
    <script src="http://localhost/iberian/js/function.js"></script>
</head>

<body class="w-100 mx-auto" onload="cookies()">
  <header class="container-fluid w-100 px-0 mx-0">
    <div class="row w-100 px-0 mx-0">
      <!-- Título -->
      <div class="col-3 px-0 mx-0 bg-dark d-flex justify-content-center" id="titulo">
        <a href="index.php" class="t1 text-light my-auto titulo p-3"><h1 class="my-auto">Iberian Rider</h1></a>
      </div>

      <!-- Navbar -->
      <div class="col-9 col-md-7 px-0 mx-0 nav d-flex justify-content-end pe-5">
        <nav class="navbar navbar-expand-sm">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link t2 <?= ($pagina_atual == "index" ? "active" : ""); ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link t2 <?= ($pagina_atual == "info" ? "active" : ""); ?>" href="info.php">Rider Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link t2 <?= ($pagina_atual == "media" ? "active" : ""); ?>" href="media.php">Media</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link t2 <?= ($pagina_atual == "travel" ? "active" : ""); ?>" href="travel.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Travels
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach($travels as $t): ?>
                      <li><a class="dropdown-item t3" href="travel.php?id=<?= $t["id"]; ?>"><?= $t["titulo"]; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link t2 <?= ($pagina_atual == "motorcycle" ? "active" : ""); ?>" href="motorcycle.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Motorcycles
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach($motos as $m): ?>
                      <li><a class="dropdown-item t3" href="motorcycle.php?id=<?= $m["id"]; ?>"><?= $m["titulo"]; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- Redes sociais -->
      <div class="col-2 d-none d-md-flex ps-3 px-0 mx-0 nav gap-3 align-items-center">
        <a href="https://www.instagram.com/iberian.rider/?igshid=OGQ5ZDc2ODk2ZA%3D%3D" target="_blank" class="instagram icone"></a>
        <a href="https://www.youtube.com/@iberianrider6867" target="_blank" class="youtube icone"></a>
      </div>

    </div>
  </header>