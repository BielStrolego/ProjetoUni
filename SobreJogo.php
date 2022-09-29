<?php
    include_once "conexao.php";

?>

<?php 

$idJogo = $_GET["id"];

include_once "conexao.php";

$sql = "select * from jogo where idJogo = " . $idJogo;

$resultado = mysqli_query($con, $sql);

if($linha = mysqli_fetch_array($resultado)){

  $timestamp = $linha['dataJogo'];
//imprime 31/01/2017 16:36:00  (LOCAL - CORRETO)
//imprime 12-31-1969 21:00:00  (WEB)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleJogo.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">
        
      </a>
      <a class="navbar-brand" href="index.php">
        <img src="imgs/uni_logo_bg.png" width="100" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#jogos">Loja</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="biblioteca.php">Biblioteca</a>
          </li>   
          </ul>
      </div>
      <div class="ico">
        <a href="sair.php">
          <img src="imgs/ico.png" width="40" alt="icone">
        </a>
      </div>
    </nav>
    
    <div class="icon">
      <?php echo "<img src='" . $linha["logoJogo"] . "'width='70';" ?>
  </div>
    <div class="titulo">
      <h1 class="titulojogo"> <?php echo  $linha['nomeJogo'] ?> </h1>
    </div>
    

    <div class="container carousel">
  <div class="row">
    <div class="col-md-12">
      <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
        <!-- slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <?php echo "<img src='" . $linha["imagem1"] . "'width='777 ' height='518'>"; ?>
          </div>

          <div class="carousel-item">
            <?php echo "<img src='" . $linha["imagem2"] . "'width='777 ' height='518'>"; ?>
          </div>

          <div class="carousel-item">
            <?php echo "<img src='" . $linha["imagem3"] . "'width='777 ' height='518'>"; ?>
          </div>

          <div type="hidden">
          </div>
          </div>

        <!-- Left right -->
        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        <!-- Thumbnails -->
        <ol class="carousel-indicators list-inline">
          <li class="list-inline-item active">
            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
              <?php echo "<img src='" . $linha["imagem1"] . "'width='100' height='66.656'>"; ?>
            </a>
          </li>

          <li class="list-inline-item">
            <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
              <?php echo "<img src='" . $linha["imagem2"] . "'width='100' height='66.656'>"; ?>
            </a>
          </li>

          <li class="list-inline-item">
            <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel">
              <?php echo "<img src='" . $linha["imagem3"] . "'width='100' height='66.656'>"; ?>
            </a>
          </li>

          <li class="list-inline-item">
          <a  href="#sobre o dev" id="sobre o dev" data-bs-toggle="modal" data-bs-target="#DevModal">
              <img src="imgs/ico_play.png" width="100" height="66.656">
            </a>
            </li>
         </ol>

      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col-sm">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Sobre o jogo</h5>
        <p class="card-text"> <?php echo $linha["descricao"]; ?> </p>
        <p class="card-text"> data de lançamento: <?php echo date('d/m/Y', strtotime($timestamp)); ?> </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Adicionar a Biblioteca</h5>
        <p class="card-text"> Valor: <?php echo $linha["precoJogo"]; ?> </p>
      </div>
      <a href="conformacao.php?id=<?php echo $linha["idJogo"]; ?>" class="btn btn-dark">adquirir</a>
    </div>
  </div>
</div>
</div>

<!-- modal -->

<div class="modal fade modal-style" id="DevModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title subtitulo-style" id="exampleModalLabel">Trailer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="container mx-auto text-center trailer-bg-style">
        <section>
        <div clas="ratio ratio-16x9">
        <iframe width="700" height="393" src="<?php echo $linha["trailerJogo"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </section>
          </div>

          </div>
        </div>
      </div>
      <?php } ?>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>