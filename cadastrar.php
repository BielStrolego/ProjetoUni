<?php 

    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $senha = $_POST["senha"];

    include "conexao.php";

    $senhacripto = md5($senha);

    $sql = "insert into usuario (nomeUsuario, email, senha) values('" . $nome . "', '" . $email . "', '" . $senhacripto . "')";

    mysqli_query($con, $sql);

    header("Location: index.php");

?>