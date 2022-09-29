<?php
    include_once "conexao.php";

    include "navbar.php";
?>



          <?php $result_carrocel = "select * from carrocel where idCarrocel order by ordemCarrocel ASC";
                $resultado_carrocel = mysqli_query($con, $result_carrocel);
                if(($resultado_carrocel) and ($resultado_carrocel->num_rows !=0)) { ?>
      
      <div class="container">        
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php $qnt_slide = mysqli_num_rows($resultado_carrocel);
                  $cont_marc=0;
                  while($cont_marc < $qnt_slide){
                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='$cont_marc'></li>";
                    $cont_marc++;
                  } ?>
  
          </ol>
          <div class="carousel-inner">
            <?php $cont_slide=0;
                  while( $row_slide = mysqli_fetch_assoc($resultado_carrocel)){ 
                    $active = "";
                    if($cont_slide == 0){
                      $active = "active";}

            echo "<div class='carousel-item $active'>";
            echo "<img class='d-block w-100' src= '" . $row_slide['imagemCarrocel'] . "' alt='" . $row_slide['nomeCarrocel'] . "'>";
            echo "<h4>" . $row_slide['nomeCarrocel'] . "  |   " . $row_slide['promoCarrocel'] . "</h4>";
            echo "</div>";?>

            <?php $cont_slide++;
            }} ?>

            
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </div>
<br><br><br>
      
      <hr id="jogos">
      <form >
      
      <h1 class="posi-jogo" >JOGOS</h1>
            
          <?php  $result_jogo = "select * from jogo";
                $resultado_jogo = mysqli_query($con, $result_jogo);
          ?>
          <div class="container jogos">
          <div class="card-group">

          <?php while($linha = mysqli_fetch_array($resultado_jogo)){ ?>
            <div class="card-deck" style="width: 16rem; margin-left:3%; margin-bottom:3%;">


            <div class="card">            
            <img class="bd-placeholder-img card-img-top" <?php echo "src='" . $linha["imagem1"]."'"; ?> >
            <div class="card-body">
            <h5 class="card-title"> <?php echo $linha["nomeJogo"]; ?> </h5>
            <div class="botao_posi">
            <a class="botao" href="Sobrejogo.php?id=<?php echo $linha["idJogo"]; ?>"> Ver mais </a>
            </div>
            </div>
            </div>

            </div><?php } ?>
            </div>
            </div>


      </form>
            
      <?php
        include "footer.php"
      ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>