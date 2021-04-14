<?php echo $this->include('header.php'); ?>
<div class="container" style="margin-top: 4vh;">

    <div class="accordion" id="accordionExample" style="margin-left: 15vw; margin-right: 15vw;">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="border-radius: 20px;">

                </div>
            </div>
        </div>
    </div>

</div>

<?php echo $this->include('footer.php'); ?>