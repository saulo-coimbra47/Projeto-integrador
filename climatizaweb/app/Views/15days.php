<?php echo $this->include('header.php'); ?>
<div class="container" style="margin-top: 4vh;">

    <div class="accordion" id="accordionExample" style="margin-left: 10vw; margin-right: 10vw;" $accordion-color: #71a0c8>
        <div class="accordion-item">
            <h2 class="accordion-header bg-blue" id="heading1">
                <button class="accordion-button bg-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                </div>
            </div>
        </div>
    </div>

</div>

<?php echo $this->include('footer.php'); ?>