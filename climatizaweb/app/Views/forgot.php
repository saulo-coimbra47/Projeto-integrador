<?php echo $this->include('header.php'); ?>
<main class="container" style="width: 25vw;">
    <h2 id="h2-rec">Recuperação de senha</h2>
    <span id="span-rec">Você receberá um e-mail contendo o link <br> para criar uma nova senha.</span>
    <?= form_open(base_url('forgot')) ?>
    <?php if (isset($error) && $error === true) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger" style="width: 20vw;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Erro!</strong> <?= $error ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <div id="form-rec">

        <div class="input-field" id="input-field-rec">
            <input type="text" name="email" id="email" placeholder="E-mail">
            <div class="underline"></div>
        </div>


        <input type="submit" value="Recuperar senha">
    </div>
    <?= form_close() ?>
    <div class="footer" id="footer-rec">

        <a href="<?= base_url('signin') ?>">Voltar ao login </a>
    </div>



</main>

<?php echo $this->include('footer.php'); ?>