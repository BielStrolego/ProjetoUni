<?php
    include "conexao.php";

    include "logado.php";
    
    $sql = "select * from biblioteca";

    //Consulta de dados no banco de dados.
    $result = mysqli_query($con, $sql);

    include "navbar.php";

?>

<div class="sidebar">
<div class="input-group rounded ">
  <input type="search" class="form-control bg-dark text-white " placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text bg-dark" id="search-addon">
    <i class="bi bi-search"></i>
  </span>
</div>
    <ul class="sidebar">
        <li ><div class="dropdown">
                <button class="btn btn-dark btn-sm dropdown-toggle border" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
                    Filtros
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Alguma ação</a>
                    <a class="dropdown-item" href="#">Outra ação</a>
                    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
                </div>
            </div>
            <?php
                while($linha = mysqli_fetch_array($result)){
            ?>
<tbody>
            <div class="container jogos"></div>
            <div class="card bg-dark text-white jogos align-items-center" style="width: 50rem;">            
            <?php echo "<img src='" . $linha["logoJogo"] .  "' width='100' height='100'>"; ?>
            <div class="card-title text-center">
            <h5><?php echo $linha["nomeJogo"] . " "; ?></h5></div>
            <img class='img-flex' src="<?php echo  $linha["Imagem1"]; ?> " width="500" >
            <br>
            <div class="botao_posi">
            <a style="background-color:#707070;"class="btn btn-dark margin_botao" href="#">Jogar</a>
            <a style="background-color: tomato ;" class="btn btn-dark margin_botao" href="excluir.php?id=<?php echo $linha["idBiblioteca"];?>">Remover da Bibloteca</a>
            </div>
            
            </div>
            </div>
               
</tbody>


<?php } ?>
<center><a class="btn btn-dark margin_botao" href="index.php#jogos">Adicionar novo Jogo</a></p></center>      
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<br><br><br><br>
           
</body>
</html>
