<?php echo $this->include('header.php'); ?>
    <main class="container" style="width: 25vw;">
        <h2 id="h2-rec">Recuperação de senha</h2>
        <span id="span-rec">Você receberá um e-mail contendo o link <br> para criar uma nova senha.</span>
        <form action="" id="form-rec">
            
            <div class="input-field" id="input-field-rec">
                <input type="text" name="username" id="username"
                    placeholder="E-mail">
                <div class="underline"></div>
            </div>
            

            <input type="submit" value="Recuperar senha">
        </form>
        <div class="footer" id="footer-rec">
            
            <a  href="#">Voltar ao login </a>
        </div>
        

        
    </main>

<?php echo $this->include('footer.php'); ?>