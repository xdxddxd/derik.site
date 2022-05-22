<link rel="stylesheet" href="<?php echo URL_BASE; ?>/assets/themes/css/Login.css">
<script src="<?php echo URL_BASE; ?>/assets/js/particles.js"></script>
<script src="<?php echo URL_BASE; ?>/assets/themes/js/Login.js"></script>
<div class="particles-js" id="particles-js"></div>
<div class="Login">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 card-login">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4">Derik OS</h1>
                                    </div>
                                    <form class="user" onsubmit="Login(); return false;">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user btn btn-outline-secondary text-dark" id="loglogin" value="<?php echo $data['role'] ?>" aria-describedby="emailHelp" placeholder="Insira o endereço de email..." required disabled>
                                        </div>
                                        <?php
                                        if ($data['role'] == 'Admin') {
                                        ?>
                                            <div class="form-group">
                                                <label for="logsenha">Senha:</label>
                                                <input type="password" class="form-control form-control-user" id="logsenha" placeholder="Insira sua senha..." required>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" checked>
                                                    <label class="custom-control-label" for="customCheck">Manter-me conectado</label>
                                                </div>
                                            </div>
                                            <center>
                                                <a href="#" data-toggle="modal" data-target="#forgotpasswordModal">Esqueceu sua senha ?</a>
                                            </center>
                                        <?php } ?>
                                        <button type="submit" class="btn btn-outline-primary btn-user btn-block"><i class="fas fa-user"></i> Entrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="list-users">
    <h5>Alterar Usuário</h5>
    <?php
    if ($data['role'] == 'Admin') {
    ?>
        <a role="button" href="<?php echo URL_BASE ?>/Login/Convidado" class="card-user btn btn-outline-secondary">
            <i class="fas fa-user"></i>&nbsp;Convidado
        </a>
    <?php
    } else if ($data['role'] == 'Convidado') {
    ?>
        <a role="button" href="<?php echo URL_BASE ?>/Login/Admin" class="card-user btn btn-outline-secondary">
            <i class="fas fa-user"></i>&nbsp;Admin
        </a>
    <?php
    }
    ?>
</div>

<!-- forgot password Modal-->
<div class="modal fade" id="forgotpasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-lock"></i> Esqueceu sua senha ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Enviaremos um código para o email inserido abaixo, confirme-o e altere sua senha.
                </p>
                <form action="#" onsubmit="forgotPassword(); return false;">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="forgotpasswordemail" aria-describedby="emailHelp" placeholder="Insira o endereço de email..." autocomplete="email">
                    </div>
                    <button type="submit" class="btn btn-success btn-user btn-block"><i class="fas fa-lock"></i> Solicitar Código</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
