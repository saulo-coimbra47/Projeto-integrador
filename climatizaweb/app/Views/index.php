<?php
if (session()->get('logged_in') == TRUE) {
    echo $this->include('UserHeader.php');
} else {
    echo $this->include('header.php');
}
?>



<div class="container">

    <form class="form-cep">
        <div class="input-group mb-3 my-4">
            <input class="form-control input-cep" placeholder="CEP" name="input-cep" type="number" maxlength="8" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary btn-form-cep" type="submit" id="button-addon2"><span class="sr-only">Pesquisar</span><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>

    <div class="previsao">
        <p class="localidade">
            <span class="localidade-cidade"></span>
            /
            <span class="localidade-uf"></span>
        </p>
        <div class="card-tempo">
            <p class="card-tempo-hoje"></p>
            <div class="card-tempo-bloco">
                <p class="card-tempo-temperatura"><span class="card-tempo-temperatura-temp"></span></p>
                <p class="card-tempo-condicao"></p>
            </div>
            <div class="card-tempo-caracteristicas">
                <p class="card-tempo-caracteristica card-tempo-caracteristicas-umidade">
                    <span class="card-tempo-caracteristica-label">Umidade: </span>
                    <span class="card-tempo-caracteristica-valor card-tempo-caracteristicas-umidade-valor"></span>
                </p>
                <p class="card-tempo-caracteristica card-tempo-caracteristicas-sensacao">
                    <span class="card-tempo-caracteristica-label">Sensação: </span>
                    <span class="card-tempo-caracteristica-valor card-tempo-caracteristicas-sensacao-valor"></span>
                </p>
                <p class="card-tempo-caracteristica card-tempo-caracteristicas-vento">
                    <span class="card-tempo-caracteristica-label">Vento: </span>
                    <span class="card-tempo-caracteristica-valor card-tempo-caracteristicas-vento-valor"></span>
                </p>
            </div>
        </div>
        <div class="card-tempo-semana">
            <div class="card-tempo-semana-dia semana-dia-1">
                <p class="card-tempo-semana-dia-data"></p>
                <div class="card-tempo-semana-temp-max">
                    <span class="sr-only">Máximo:</span>
                    <span class="card-tempo-semana-temp-max-val"></span>º
                </div>
                <div class="card-tempo-semana-temp-min">
                    <span class="sr-only">Mínimo:</span>
                    <span class="card-tempo-semana-temp-min-val"></span>º
                </div>
            </div>

            <div class="card-tempo-semana-dia semana-dia-2">
                <p class="card-tempo-semana-dia-data"></p>
                <div class="card-tempo-semana-temp-max">
                    <span class="sr-only">Máximo:</span>
                    <span class="card-tempo-semana-temp-max-val"></span>º
                </div>
                <div class="card-tempo-semana-temp-min">
                    <span class="sr-only">Mínimo:</span>
                    <span class="card-tempo-semana-temp-min-val"></span>º
                </div>
            </div>

            <div class="card-tempo-semana-dia semana-dia-3">
                <p class="card-tempo-semana-dia-data"></p>
                <div class="card-tempo-semana-temp-max">
                    <span class="sr-only">Máximo:</span>
                    <span class="card-tempo-semana-temp-max-val"></span>º
                </div>
                <div class="card-tempo-semana-temp-min">
                    <span class="sr-only">Mínimo:</span>
                    <span class="card-tempo-semana-temp-min-val"></span>º
                </div>
            </div>

            <div class="card-tempo-semana-dia semana-dia-4">
                <p class="card-tempo-semana-dia-data"></p>
                <div class="card-tempo-semana-temp-max">
                    <span class="sr-only">Máximo:</span>
                    <span class="card-tempo-semana-temp-max-val"></span>º
                </div>
                <div class="card-tempo-semana-temp-min">
                    <span class="sr-only">Mínimo:</span>
                    <span class="card-tempo-semana-temp-min-val"></span>º
                </div>
            </div>

            <div class="card-tempo-semana-dia semana-dia-5">
                <p class="card-tempo-semana-dia-data"></p>
                <div class="card-tempo-semana-temp-max">
                    <span class="sr-only">Máximo:</span>
                    <span class="card-tempo-semana-temp-max-val"></span>º
                </div>
                <div class="card-tempo-semana-temp-min">
                    <span class="sr-only">Mínimo:</span>
                    <span class="card-tempo-semana-temp-min-val"></span>º
                </div>
            </div>
        </div>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/4fb3cafa07.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>

</div>

<?php echo $this->include('footer.php'); ?>