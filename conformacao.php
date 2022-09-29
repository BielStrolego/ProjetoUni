<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
    <br> <br>

 <?php  
        
        $idJogo = $_GET["id"];
        
        include "conexao.php";

        include "logado.php";

        $sql = "select * from jogo where idJogo = " . $idJogo;

        $resultado = mysqli_query($con, $sql);

        if($linha = mysqli_fetch_array($resultado)){ ?>
    <section class="area-login">
                <form method="post" action="confirmando.php">
                  <div class="container compra">
                  <p><?php echo "<img src='" . $linha["logoJogo"] .  "' width='200' >"; ?>
             <?php echo $linha["nomeJogo"]; ?> </p>
            <p> Valor do jogo: <?php echo $linha["precoJogo"]; ?> </p>
            <p> <input style="display:none;" type="hiden" name="nomeJogo" value="<?php echo $linha["nomeJogo"]; ?>"> </p>
            <p> <input style="display:none;" type="hiden" name="logoJogo" value="<?php echo $linha["logoJogo"]; ?>"> </p>
            <p> <input style="display:none;" type="hiden" name="imagemJogo" value="<?php echo $linha["imagem1"]; ?>"> </p>
            <p> <input type="hidden" name="idJogo" value="<?php echo $linha["idJogo"]; ?>"> </p>            
            <p> <input class="btn btn-dark" type="submit" value="Confirmar"> <a class="btn btn-dark" href="Sobrejogo.php?id=<?php echo $linha["idJogo"]; ?>"> Cancelar </a></p>
            </div>
          </form>
          </section>

    <?php } ?>

</body>
</html>