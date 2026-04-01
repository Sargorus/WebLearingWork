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

<style>
      .plant-gallery {
        display: flex;
        gap: 15px;
        border: 5px solid #79a177;
        background-color: #d0e7cf;
        padding: 15px;
        width: 100%;
        border-radius: 8px;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

        .textGallery {
        text-align: left;
        flex: 1;              
        min-width: 200px;     
        display: flex;        
        flex-direction: column; 
        background-color: rgba(255, 255, 255, 0.3);  
        border-radius: 8px;   
        padding: 10px;        
        align-items: center;
    }
    
    .textGalleryCenter {
        text-align: center;
        flex: 1;              
        min-width: 200px;     
        display: flex;        
        flex-direction: column; 
        background-color: rgba(255, 255, 255, 0.3);  
        border-radius: 8px;   
        padding: 10px;        
        align-items: center;
    }
    
    .textGalleryCenter img {
        border: 5px solid #173516;
        width: 100%;         
        height: auto;        
        display: block;
        object-fit: cover;    
        aspect-ratio: 1 / 1;  
        border-radius: 4px;   
        box-sizing: border-box; 

        max-width: 350px;  
        flex-shrink: 1;    
        min-width: 150px; 
    }
    

    .textGalleryCenter div {
        margin-top: 10px;     
        font-weight: 500;     
        color: #173516;       
        font-size: 16px;      
    }
  </style>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/"><i class="fas fa-meteor"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AcanthocalciumPurple">Акантокалициум фиолетовый</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AporocactusWattleShaped">Апорокактус плетевидный</a>
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

    echo "Вы на странице: $url, будьте внимательны!<br> \n";

    if ($url == "/") {
        require "../views/main.php";
    } elseif (preg_match("#^/AcanthocalciumPurple#", $url)) {
        require "../views/AcanthocalciumPurple.php";
    } elseif (preg_match("#^/AporocactusWattleShaped#", $url)) {
        require "../views/AporocactusWattleShaped.php";
    } 
    ?>
</div>

</body>
</html>