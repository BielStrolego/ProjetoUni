<?php
    include "navbar.php";
?>
    <section class="area-login">
        <div class="Login">
            <div>
                <img src="imgs/uni_logo_bg.png">
        </div>

        <form method="POST" action="cadastrar.php">
            
            <input type="text" name="nome" placeholder="usuario" autofocus>
            <input type="email" name="email" placeholder="email">
            <input type="password" name="senha" id="senha" placeholder="senha">
            <input type="password" name="senha" id="senha2" placeholder="senha">
            <input type="submit" value="Cadastrar" onclick="return validar()">
    <script>
    function validar(){
    var senha = document.getElementById("senha").value;
    var senha2 = document.getElementById("senha2").value;

        if(senha == senha2){
            return true;
        }
        else{
            alert("senhas diferentes, por favor reescreva-as");
            return false;
        };
    }
    </script>
        </form>
        <p class="a">Ja tem uma conta?<a class="btn-sm bg-light w-25 p"href="login.php">Login</a></p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>    
</body>
</html>