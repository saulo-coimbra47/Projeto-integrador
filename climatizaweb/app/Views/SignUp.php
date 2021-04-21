<?php echo $this->include('header.php'); ?>
    <main class="container" style="width:25vw;">
        <h2 id="h2-cad">Cadastro</h2>

        <?= form_open(base_url('signup'), ['class' => 'login-form']) ?>
        <!-- MENSAGEM DE SUCESSO -->
        <?php $message = $session = session()->getFlashdata('message'); ?>
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
                <div class="alert alert-danger" style="width: 20vw;">
                <br>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Erro!</strong> <?= $error ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>


        <div id="form-cad">
            <div class="input-field" id="input-field-cad">
                <input type="text" name="name" id="name"
                    placeholder="Nome">
                <div class="underline"></div>
            </div>

            <div class="input-field" id="input-field-cad">
                <input type="text" name="email" id="email"
                    placeholder="E-mail">
                <div class="underline"></div>
            </div>

            <div class="input-field" id="input-field-cad">
                <input type="password" name="password" id="password"
                    placeholder="Senha">
                <div class="underline"></div>
            </div>

            <div class="input-field" id="input-field-cad">
                <input type="password" name="confirm" id="confirm"
                    placeholder="Confirmar senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Registrar">
            <br>
            <div class="form">
                <p class="message"> <small> Já tem uma conta?</small> <a href="<?= base_url('signin') ?>"><small>Entrar</small></a></p>
            </div>

        </div>
        <?= form_close() ?>

    </main>

<?php echo $this->include('footer.php'); ?>