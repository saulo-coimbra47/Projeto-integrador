<?php echo $this->include('UserHeader.php', array('titulo' => $titulo)); ?>
<div class="container" style="margin-top: 4vh">

    <div class="card" style="margin-left: 15vw; margin-right: 15vw; border-radius: 8px;">
        <div class="card-header bg-blue" style="text-align: center; border-radius: 8px 8px 0px 0px;">
            <h1 style="color: rgb(0, 60, 109);">Dados do usuário</h1>
        </div>
        <div class="card-body" style="text-align: center;">

            <div class="row align-items-center">
                <label class="col"><strong>Nome: </strong> </label>
                <div class="col">
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $UserName ?>">
                </div>

                <div class="col">
                    <button type="button" class="btn btn-info btn-sm" style="background: linear-gradient(to left,#1e87e8 , rgb(0, 60, 109)); border: white;" data-bs-toggle="modal" data-bs-target="#ModalNome"> Editar </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalNome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editando o nome</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?= form_open(base_url('altname'), ['id' => 'formChangeName']) ?>
                                    
                                        <div class="input-field" id="input-field-cad">
                                            <input type="text" name="name" id="name" placeholder="<?php echo $UserName ?>">
                                            <div class="underline"></div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="row align-items-center">
                <label class="col"><strong>Local favorito: </strong> </label>
                <div class="col">
                    <input type="text" readonly class="form-control-plaintext" value="<?php if($UserPlace !== null){ echo $UserPlace; } else { echo "Local indefinido"; } ?>">
                </div>

                <div class="col">
                    <button type="button" class="btn btn-info btn-sm" style="background: linear-gradient(to left,#1e87e8 , rgb(0, 60, 109)); border: white;" data-bs-toggle="modal" data-bs-target="#ModalLocal"> Editar </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalLocal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editando o local favorito</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?= form_open(base_url('altplace'), ['id' => 'formChangePlace']) ?>
                                        <div class="input-field" id="input-field-cad">
                                            <input type="text" name="local" id="local" placeholder="Cidade-UF">
                                            <div class="underline"></div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <!-- <div class="row align-items-center">
                <label class="col"><strong>Notificação por email: </strong> </label>


            </div> <div class="row align-items-center">
                <form action="">
                    <div class="col">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="SwitchDias">
                            <label class="form-check-label" for="flexSwitchCheckDefault"><small>receba informações
                                    sobre clima da sua cidade favorita</small></label>
                        </div>
                    </div>
                    <br>
                    <div id="dias">
                        <div class="col">
                            Em quais dias deseja receber?
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Dom
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Seg
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ter
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Qua
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Qui
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Sex
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Sáb
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-outline-info btn-sm" type="submit">Salvar</button>
                    </div>

                </form> 
            </div> -->


        </div>
        <div class="card-footer bg-blue" style="text-align: center; border-radius: 0px 0px 8px 8px;">
            <button type="button" style="color: white; background: linear-gradient(to left,#1e87e8 , rgb(0, 60, 109));" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ModalSenha">
                Alterar senha </button>

            <!-- Modal -->
            <div class="modal fade" id="ModalSenha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alterando a senha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?= form_open(base_url('altpassword'), ['id' => 'formChangePlace']) ?> 
                            
                                <div class="input-field" id="input-field-cad">
                                    <input type="password" name="password1" id="password1" placeholder="Senha">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field" id="input-field-cad">
                                    <input type="password" name="password2" id="password2" placeholder="Confirmar senha">
                                    <div class="underline"></div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php echo $this->include('footer.php'); ?>