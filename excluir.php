<?php

    $idBiblioteca = $_GET["id"];

    include "conexao.php";

    $sql = "delete from biblioteca where idBiblioteca = " . $idBiblioteca;

    mysqli_query ($con, $sql);

    header("location: biblioteca.php");
?>