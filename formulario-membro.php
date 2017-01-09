<?php require_once '_includes/header.php'; ?>

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php require_once '_modulos/suporte-tecnico.php'; ?>
                        <h4 class="page-title">Cadastrar um novo membro</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h4 class="header-title m-t-0">Formulário de cadastro de membros</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Preencha as informações abaixo para cadastrar um novo membro.
                                    </p>

                                    <form id="basic-form" action="#">
                                        <div>
                                            <h3>Informações pessoais</h3>
                                            <section>
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="nome">Nome<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input class="form-control required" id="nome" name="nome" type="text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="sobrenome">Sobrenome<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input class="form-control required" id="sobrenome" name="sobrenome" type="text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <div class="form-group clearfix">
                                                            <label for="datepicker-autoclose">Data de Nascimento<span class="text-danger">*</span></label>
                                                            <div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="dataDeNascimento" id="datepicker-autoclose">
                                                                    <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <div class="form-group clearfix">
                                                            <label for="estadoCivil">Estado civil<span class="text-danger">*</span></label>
                                                            <div>
                                                                <select class="c-select form-control" name="estadoCivil" id="estadoCivil">
                                                                    <option selected>Clique para selecionar um estado</option>
                                                                    <option value="1">Casado(a)</option>
                                                                    <option value="2">Solteiro(a)</option>
                                                                    <option value="3">Divorciado(a)</option>
                                                                    <option value="4">Viuvo(a)</option>
                                                                    <option value="5">União estável</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-2">
                                                        <div class="form-group clearfix">
                                                            <label for="datepicker-autoclose">Batizado<span class="text-danger">*</span></label>
                                                            <div>
                                                                <div class="input-group">
                                                                    <div class="switchery-demo">
                                                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" name="batizado"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                            </section>
                                            <h3>Endereço</h3>
                                            <section>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="name"> First name<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="name" name="name" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="surname"> Last name<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="surname" name="surname" type="text" class="required form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="email">Email<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="email" name="email" type="text" class="required email form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="address">Address<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="address" name="address" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label>(<span class="text-danger">*</span>) Mandatory</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                            </section>
                                            <h3>Contatos</h3>
                                            <section>
                                                <div class="form-group clearfix row">
                                                    <div class="col-lg-12">
                                                        <ul class="list-unstyled w-list">
                                                            <li><b>First Name :</b> Jonathan </li>
                                                            <li><b>Last Name :</b> Smith </li>
                                                            <li><b>Emial:</b> jonathan@smith.com</li>
                                                            <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Verifica informações</h3>
                                            <section>
                                                <div class="form-group clearfix row">
                                                    <div class="col-lg-12">
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox-h" type="checkbox">
                                                            <label for="checkbox-h">
                                                                Todas as informações estão corretas?
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </form>


                                </div>

                            </div>
                            <!-- end row -->

                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->

                <?php require_once '_includes/footer.php'; ?>
