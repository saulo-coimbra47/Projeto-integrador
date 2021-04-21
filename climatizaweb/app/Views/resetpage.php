<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title></title>
    <link rel="stylesheet" href="<?= base_url('css/Redefinir.css') ?>">
</head>

<body>
    <main class="container" id="container-red">
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

        <?php if (isset($error) && $error === true) : ?>
            <?php foreach ($errors as $error) : ?>
                <div class="alert alert-danger" style="width: 20vw;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Erro!</strong> <?= $error ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?= form_open(base_url('savepassword')) ?>
        <h2 id="h2-red">Redefinir senha</h2>
        <span id="span-red">Crie uma nova senha com no mínimo 8 caracteres.</span>
        <div id="form-red">

            <div class="input-field" id="input-field-red">
                <input type="password" name="password" id="password" placeholder="Senha">
                <div class="underline"></div>
            </div>

            <div class="input-field" id="input-field-red">
                <input type="password" name="confirm" id="confirm" placeholder="Confirmar senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Confirmar">
        </div>
        <?=form_close()?>


    </main>
</body>

</html>