<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>

  <body>

    <?php include("../view/menu.php"); ?>

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slide1.png" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="images/slide2.png" class="d-block w-100" alt="Slide 2">
        </div>
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
    <div class="vr"></div>

    <div class="alert alert-info" role="alert">
      <center><b><i>Todo dia milhares de ofertas para você aproveitar. Confira!</i></b></center>
    </div>


    <div class="card-group">
      <div class="card">
        <img src="images/step1.jpg" class="card-img" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tornando uma rotina de cuidados diários</h5>
          <p class="card-text">Você confere diversas opções em suplementos e vitaminas. No nosso site, você encontra shampoos, condicionadores, cremes para pentear, máscaras e mais para o Cuidado do Cabelo. Além disso, você pode conferir nossa seção em suplementos, produtos de higiene bucal, e limpeza da casa com os melhores preços.</p>
        </div>
      </div>
      <div class="card">
        <img src="images/step2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">As novidades da Moda</h5>
          <p class="card-text">Navegue pela nossa página de Suplementos Esportivos e aproveite nossa seleção em whey protein, creatina, vitaminas e mais. Você encontra shampoos, condicionadores, cremes para pentear, máscaras e mais para o Cuidado do Cabelo, além disso, você pode conferir nossa seção em suplementos.</p>
        </div>
      </div>
      <div class="card">
        <img src="images/step3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Os melhores eletrônicos</h5>
          <p class="card-text">Aqui você encontra variedades de produtos eletrônicos em computadores, celulares, TVs, pc gamers, tablets e mais com os melhores preços.</p>
        </div>
      </div>
    </div>

    <div class="vr"></div>
    <div class="vr"></div>

    <div class="alert alert-info" role="alert">
      <center><b><i>Sistema de controle de estoque | Todos os direitos reservados.</i></b></center>
    </div>

    <div class="vr"></div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>