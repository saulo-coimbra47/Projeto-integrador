<?php echo $this->include('header.php'); ?>
    <main class="container" style="width: 25vw;">
        <h2 id="h2-lgn">Login</h2>
        <form action="" id="form-lgn">
            <div class="input-field" id="input-field-lgn">
                <input type="text" name="username" id="username"
                    placeholder="E-mail">
                <div class="underline"></div>
            </div>
            <div class="input-field" id="input-field-lgn">
                <input type="password" name="password" id="password"
                    placeholder="Senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
        </form>

        <div class="footer" id="footer-lgn">
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
            <a  href="#">Não tem uma conta? Cadastre-se </a>
        </div>
    </main>


<?php echo $this->include('footer.php'); ?>