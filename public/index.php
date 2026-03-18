<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  rel="stylesheet" />
</head>
<body>
    <div>Всем привет</div>
    <div>Версия PHP: <?php print phpversion(); ?></div>

    <pre>
    <?php print_r($_SERVER["REQUEST_URI"]) ?>
    </pre>

    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-meteor"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=".../views/main.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".../views/AcanthocalciumPurple">Акантокалициум фиолетовый</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".../views/AporocactusWattleShaped">Апорокактус плетевидный</a>
        </li>
        
        <!--
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        -->

      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <?php 
    $url = $_SERVER["REQUEST_URI"];

    echo "Вы на странице: $url, будьте внимательны!<br>";

    if ($url == "/") {
        require "views/main.php";
    } elseif ($url == "/andromeda") {
        require "views/andromeda.php";
    } elseif ($url == "/orion") {
        require "views/orion.php";
    } 
    ?>
</div>

</body>
</html>