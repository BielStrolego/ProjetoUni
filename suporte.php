
  <?php
  include "conexao.php";
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
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
            <a class="nav-link" href="#">Biblioteca</a>
          </li>   
          </ul>
      </div>
      <div class="ico">
        <a href="">
          <img src="imgs/ico.png" width="40" alt="icone">
        </a>
      </div>
    </nav>

  <br> <br>
<div class="container" id="form">
    <form  action="formulario-contato" method="post">
          <div class="lb1">
            <label for="nome"> <span> Nome: </span> </label>
            <input type="texto" id="nome" name="nome_usuario">
        </div>
      
        <div class="lb2">
          <label for="email"> <span> E-mail: </span> </label>
          <input type="email" id="email" name="email_usuario">
        </div>
        <div class="lb3">
          <label for="texto"> <span> Reclamações: </span></label>
          <textarea id="texto" name="texto_usuario"></textarea>
        </div>
        
  </form>
  <article>
    <h2>Contate-nos</h2><br>
    <span>Email: emaildaempresa@gmail.com</span><BR>
    <span>Telefone: (21) 1234-4321</span>
  </article>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
  </html>