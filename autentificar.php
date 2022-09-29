<?php

    $login = $_POST["usuario"];
    $senha = $_POST["senha"];

    include "conexao.php";

    $senhacripto = md5($senha);
    //echo $senhacripto;

    //$cost = 15;
    //$password_hash = password_hash($senha, PASSWORD_DEFAULT, ["cost" => $cost] );

    //$password_hash2 = password_hash($senha, PASSWORD_DEFAULT, ["cost" => $cost] );
    
    //echo $password_hash . " - ";
    //echo $password_hash2;

    $sql = "select * from usuario where nomeUsuario = '" . $login . "' and senha = '" . $senhacripto . "'";
        
    $resultado = mysqli_query($con, $sql);
    
    if ($linha = mysqli_fetch_array($resultado)){
        //echo "Bem vindo, ". $linha["nome"];
        session_start();
        $_SESSION["usuario_logado"] = $linha["nomeUsuario"];
        
        echo "<script>
        alert('Bem vindo!');
        window.location = 'index.php';
        </script>";

    } 
    else {
        echo "<script>
                alert('Usuario invalido');
                window.location = 'login.php';
              </script>";
    }
?>