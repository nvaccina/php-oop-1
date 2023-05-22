<?php
include_once __DIR__ . "/models/Movie.php"; 

$arrayFilm = [
  new Movie('Fast And Furios', 'Rob Cohen', 'Giallo/Avventura', 106, 'img/F&F1.jpg'),
  new Movie('2 Fast 2 Furios', 'John Singleton', 'Azione/Giallo', 108, 'img/F&F2.jpg'),
  new Movie('The Fast and the Furious: Tokyo Drift', 'Justin Lin', 'Azione/Drammatico', 104, 'img/F&F3.jpg'),
  new Movie('Fast & Furious - Solo parti originali', 'Justin Lin', 'Azione/Thriller', 107, 'img/F&F4.jpg'),
  new Movie('Fast & Furious 5', 'Justin Lin', 'Avventura', 130, 'img/F&F5.jpg'),
  new Movie('Fast & Furious 6', 'Justin Lin', 'Azione/Giallo', 130, 'img/F&F6.jpg'),
  new Movie('Fast & Furious 7', 'James Wan', 'Azione/Avventura', 140, 'img/F&F7.jpg'),
  new Movie('Fast & Furious 8', 'F. Gary Gray', 'Azione/Avventura', 136, 'img/F&F8.jpg'),
  new Movie('Fast & Furious 9 - The Fast Saga', 'Justin Lin', 'Azione/Avventura', 135, 'img/F&F9.jpg'),
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

<div class="container text-center mt-5 mb-1">
  <h1 class="text-white pb-2">FAST & FURIOS MOVIES</h1>
  <hr class="text-white">

  <div class="d-flex flex-wrap justify-content-center mt-5">

  <?php foreach($arrayFilm as $film): ?>

    <div class="card mx-2 my-4 border border-0" style="width: 18rem; cursor:pointer;">
      <img src="<?php echo $film->image ?>" class="card-img-top" alt="<?php echo $film->titolo ?>" style="height: 400px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $film->titolo ?></h5>
        <p class="card-text"><?php echo $film->getInfo()?></p>
      </div>
    </div>

    <?php endforeach; ?>
  </div>
  <hr class="text-white">
</div>

<footer class="py-3">
  <div class="container text-end">
    <span class="text-white">Made by Niccolò Vaccina</span>
  </div>
  
</footer>
</body>
</html>