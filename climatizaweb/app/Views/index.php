<?php
if (session()->get('logged_in') == TRUE) {
    echo $this->include('UserHeader.php');
}
else{
    echo $this->include('header.php');
}
?>


<div class="container">
    <div class="input-group mb-3 my-4">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
        </div>
    </div>


    <div class="resultado">
        <div class="btn-group " role="group" aria-label="Basic example" style="width: 100%;">
            <button type="button" class="btn btn-secondary">Agora</button>
            <button type="button" class="btn btn-secondary">Hoje</button>
            <button type="button" class="btn btn-secondary">Amanha</button>
            <button type="button" class="btn btn-secondary">15 dias</button>
        </div>


        <div class="card-body text-center my-4">
            <h2 class="card-title">Previsão de hoje pra {Cidade}</h2>

            <br>
            <div class="row justify-content-md-center">

                <div class="col">
                    <h5>Temperatura máxima: </h5>
                </div>

                <div class="col">
                    <h5>30° </h5>
                </div>

            </div>

            <div class="row justify-content-md-center">

                <div class="col">
                    <h5>Temperatura mínima: </h5>
                </div>

                <div class="col">
                    <h5>15° </h5>
                </div>

            </div>

            <div class="row justify-content-md-center">

                <div class="col">
                    <h5>Chuva: </h5>
                </div>

                <div class="col">
                    <h5>10mm - 90% </h5>
                </div>

            </div>

            <div class="row justify-content-md-center">

                <div class="col">
                    <h5>Vento: </h5>
                </div>

                <div class="col">
                    <h5>WSW - 12km/h</h5>
                </div>

            </div>

            <div class="row justify-content-md-center">

                <div class="col">
                    <h5>Umidade: </h5>
                </div>

                <div class="col">
                    <h5>36% - 76%</h5>
                </div>

            </div>

            <div class="row justify-content-md-center">

                <div class="col">
                    <h5>Sol: </h5>
                </div>

                <div class="col">
                    <h5>06:19 - 17:55</h5>
                </div>



            </div>


        </div>



    </div>
</div>

<?php echo $this->include('footer.php'); ?>