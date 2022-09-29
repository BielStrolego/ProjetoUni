
<?php
    include "navbar.php";
?>
    <section class="area-login">
        <div class="Login">
            <div>
                <img src="imgs/uni_logo_bg.png">
        </div>

        <form class="a" method="POST" action="autentificar.php">
            <input type="text" name="usuario" placeholder="usuario" autofocus>
            <input type="password" name="senha" placeholder="senha">
            <input type="submit" value="Entrar">
        </form>
        <p class="a">Ainda não tem uma conta?<a class="p"href="Cadastro.php">Criar conta</a></p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>