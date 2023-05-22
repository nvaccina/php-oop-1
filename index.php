<?php
include_once __DIR__ . "/models/Movie.php"; 

$arrayFilm = [
  new Movie('Fast And Furios', 'Rob Cohen', 'Giallo/Avventura', 106, 'img/F&F1.jpg'),
  new Movie('2 Fast 2 Furios', 'John Singleton', 'Azione/Giallo', 108, 'img/2F2F.jpg'),
  new Movie('The Fast and the Furious: Tokyo Drift', 'Justin Lin', 'Azione/Drammatico', 104, 'img/F&FTokyo.jpg'),
  new Movie('Fast & Furios X', 'Louis Leterrier', 'Azione/Avventura', 141, 'img/F&fX.jpg'),
]


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>PHP OOP</title>
</head>
<body class="bg-dark">

<div class="container text-center my-5">
  <h1 class="text-white">MOVIES</h1>
  <hr class="text-white">

  <div class="d-flex flex-wrap justify-content-center mt-5">

  <?php foreach($arrayFilm as $film): ?>

    <div class="card mx-2 border border-0" style="width: 18rem;">
      <img src="<?php echo $film->image ?>" class="card-img-top" alt="<?php echo $film->titolo ?>" style="height: 400px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $film->titolo ?></h5>
        <p class="card-text"><?php echo $film->getFullInfo()?></p>
      </div>
    </div>

    <?php endforeach; ?>

  </div>



</div>

  
  
</body>
</html>