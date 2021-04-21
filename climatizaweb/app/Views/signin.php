<?php echo $this->include('header.php'); ?>
<main class="container" style="width: 25vw;">
    <h2 id="h2-lgn">Login</h2>
    <?= form_open(base_url('signin'), ['class' => 'form']) ?>

    <!-- MENSAGEM DE SUCESSO -->
    <?php $message = $session = session()->getFlashdata('messageReset'); ?>
    <?php if (isset($message)) : ?>

        <script type="text/javascript">
            Swal.fire({
                title: 'Sucesso',
                text: '<?php echo $message ?>',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    <?php endif; ?>
    <!-- MESSAGEM DE ERRO -->
    <?php if (isset($error) && $error === true) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger" style="width: 20vw;" >
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Erro!</strong> <?= $error ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <div id="form-lgn">
        <div class="input-field" id="input-field-lgn">
            <input type="text" name="email" id="email" placeholder="E-mail">
            <div class="underline"></div>
        </div>
        <div class="input-field" id="input-field-lgn">
            <input type="password" name="password" placeholder="Senha">
            <div class="underline"></div>
        </div>

        <input type="submit" value="Entrar">
    </div>
    <?= form_close() ?>

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
    </div>
    <div class="form" style="text-align: center;">
            <br>
            <p class="message"><small>Esqueceu a Senha?</small> <a href="<?= base_url('forgot') ?>"> <small> Recupere a senha</small></a></p>
            <p class="message"><small>Não tem Cadastro? </small><a href="<?= base_url('signup') ?>"> <small> Crie uma conta </small></a></p>
    </div>
</main>


<?php echo $this->include('footer.php'); ?>