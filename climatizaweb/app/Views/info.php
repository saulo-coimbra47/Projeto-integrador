<?php echo $this->include('header.php'); ?>
<div class="container">

    <div class="card text-center" style="margin-left: 1vw; margin-right: 1vw; border-radius: 8px;">
        <div class="card-header bg-blue" style="border-radius: 8px 8px 0px 0px;">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#">Agora</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Hoje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Amanhã</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">15 dias</a>
                </li>
        </div>
        <div class="card-body">
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