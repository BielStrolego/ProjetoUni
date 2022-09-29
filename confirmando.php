<?php
    $idBiblioteca = $_POST["idJogo"];
    $nomeJogo = $_POST["nomeJogo"];
    $logoJogo = $_POST["logoJogo"];
    $imagem1 = $_POST["imagemJogo"];

    // echo "O produto " . $produto . " de preco R$ " . $preco . " foi cadastrado.";

    include "conexao.php";

    $sql = "insert IGNORE biblioteca (idBiblioteca, nomeJogo, logoJogo, imagem1) values ('" . $idBiblioteca ."', '". $nomeJogo . "', '" . $logoJogo . "', '" . $imagem1 . "')";

    mysqli_query($con, $sql);

    header("Location: biblioteca.php");

    
?>
