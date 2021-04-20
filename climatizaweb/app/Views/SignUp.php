<?php echo $this->include('header.php'); ?>
    <main class="container" style="width:25vw;">
        <h2 id="h2-cad">Cadastro</h2>
        <form action="" id="form-cad">
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
                <input type="password" name="password" id="password"
                    placeholder="Confirmar senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Registrar">
            <a  href="#">Esqueci minha senha</a>
        </form>
       

    </main>

<?php echo $this->include('footer.php'); ?>