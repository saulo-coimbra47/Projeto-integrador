<?php echo $this->include('header.php'); ?>
<main class="container">
    <h2>Login</h2>
    <form action="">
        <div class="input-field">
            <input type="text" name="username" id="username" placeholder="E-mail">
            <div class="underline"></div>
        </div>
        <div class="input-field">
            <input type="password" name="password" id="password" placeholder="Senha">
            <div class="underline"></div>
        </div>

        <input type="submit" value="Entrar">
    </form>

    <div class="footer">
        <span>Conecte-se com uma rede social</span>
        <div class="social-fields">
            <div class="social-field google">
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                    Conectar-se com Google+
                </a>
            </div>
            <div class="social-field facebook">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    Conectar-se com Facebook
                </a>
            </div>
        </div>
    </div>
</main>

<?php echo $this->include('footer.php'); ?>