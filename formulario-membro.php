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

                                    <form id="basic-form" action="controller/membroController.php" method="post">
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
                                                            <label for="batizado">Batizado<span class="text-danger">*</span></label>
                                                            <div>
                                                                <div class="input-group">
                                                                    <div class="switchery-demo">
                                                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" name="batizado" id="batizado"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                            </section>
                                            <h3>Endereço</h3>
                                            <section>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-8">
                                                        <div class="form-group clearfix">
                                                            <label for="endereco"> Endereço<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="endereco" name="endereco" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4">
                                                        <div class="form-group clearfix">
                                                            <label for="bairro"> Bairro<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="barirro" name="bairro" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="estado"> Estado<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="estado" name="estado" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="cidade"> Cidade<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="cidade" name="cidade" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </section>
                                            <h3>Contatos</h3>
                                            <section>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="telefone"> Telefone<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="telefone" name="telefone" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="celular"> Celular<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="celular" name="celular" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="email"> Email<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="email" name="cidade" type="text" class="required email form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label for="facebook"> Facebook<span class="text-danger">*</span></label>
                                                            <div>
                                                                <input id="facebook" name="facebook" type="text" class="required form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </section>
                                            <h3>Verifica informações</h3>
                                            <section>
                                                <div class="form-group clearfix row">
                                                    <div class="col-lg-12">

                                                        <p><strong>Nome:</strong> Thiago Cunha</p>
                                                        <p><strong>Data de Nascimento:</strong> 18 de julho de 1989</p>
                                                        <p><strong>Endereço:</strong> Rua das pacas, Unamar - Cabo Frio - Rio de Janeiro</p>
                                                        <p><strong>Telefone: </strong>22 27724656</p>
                                                        <p><strong>Celular: </strong>22 997901865</p>
                                                        <p><strong>E-mail: </strong>grupocodenome@gmail.com</p>

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
