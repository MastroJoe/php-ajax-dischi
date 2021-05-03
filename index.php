<?php
  include './data.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/master.css">
    <title>Ajax Dischi</title>
</head>
<body>
  <!-- MAIN -->
  <main>
    <div class="container-root">

      <?php
      foreach ($albums as $key => $value) {
      ?>
      <div class="card">
        <div class="card-cover">
          <div class="card-front" style="background-image: url('<?= $value['poster'] ?>')">
        </div>
        <div class="card-back">
          <h1><?= $value['title'] ?></h1>
          <h2><?= $value['author'] ?></h2>
          <p><?= $value['year'] ?></p>
          <br>
          <p class="genre">
            <?= $value['genre'] ?>
          </p>
        </div>
      </div>
      <?php } ?>

    </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> -->
  <script src="dist/js/main.js"></script>
</body>
</html>

<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento della pagina
ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di Axios: al caricamento della pagina
vue chiederà attraverso una chiamata i dischi a php e li stamperà
attraverso vue.
Bonus: Attraverso un’altra chiamata axios, filtrare gli album per artista -->
