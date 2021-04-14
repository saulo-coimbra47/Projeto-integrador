<?php echo $this->include('header.php'); ?>

<div class="container">

    <div class="card" style="border-radius: 20px; margin-left: 15vw; margin-right: 15vw;">
        <div class="card-header" style="text-align: center; background-color: rgb(207, 194, 149); border-radius: 20px 20px 0px 0px;">
            <h1>Tempo agora em {Cidade}</h1>
        </div>
        <div class="card-body" style="text-align: center; background-color: rgb(255, 255, 255);">
            <h1 class="card-title">20°</h1>
            <br>
            <h5 class="card-text">Nublado</h5>
            <br>
            <h5 class="card-text">Noite</h5>

            <img class="img-fluid" src="img/nubladonoite.png" alt="" width="150vw" height="150vh">




            <div class="row align-items-center">

                <div class="col">
                    <h5>Vento:</h5>
                </div>

                <div class="col">
                    <h5>20 km/h</h5>
                </div>

            </div>

            <div class="row align-items-center">

                <div class="col">
                    <h5>Umidade:</h5>
                </div>

                <div class="col">
                    <h5>85%</h5>
                </div>

            </div>
            <br>

        </div>
        <div class="card-footer" style="text-align: center; background-color: rgb(122, 187, 187); border-radius: 0px 0px 20px 20px;">
            <button type="button" class="btn btn-info">Mais informações</button>
        </div>
    </div>


</div>

<?php echo $this->include('footer.php'); ?>