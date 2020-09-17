<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('node_modules/sweetalert2/dist/sweetalert2.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('node_modules/animate.css/animate.compat.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/extra.css')?>">

    <title>Login</title>

    <style>
        .jumbotron {
            background: rgba(255, 255, 255, 0.850);
            border-radius: 2.5em 0.5em 2.5em 0.5em;
        }

        .alertCustom {
            border-radius: 2.5em 0.5em 2.5em 0.5em;
        }
    </style>

</head>

<body class="bg-dark">

    <div class="container">
        <form action="../controller/validarLogin.php" method="post" id="loginForm"
            class="jumbotron col-sm-12 col-md-6 col-lg-4 mx-auto mt-9">
            <label class="text-center col-12">
                <h4>Bem-vindo!</h4>
                <h6>Por favor, faça login abaixo</h6>
            </label>

            <div class="form-group my-1 mx-auto">
                <label class="my-2" for="user">Usuário ou E-mail</label>
                <input class="form-control" type="text" name="user" id="user">
                <small id="userWarn"></small>
            </div>

            <div class="form-group my-1 mx-auto">
                <label class="my-2" for="pass">Senha</label>
                <input class="form-control" type="password" name="pass" id="pass">
                <small id="passWarn"></small>
            </div>

            <div class="mt-3 text-center">
                <small class="form-text">Não tem uma conta? <a href="#" data-toggle="modal"
                        data-target="#modalCadastro">Cadastre-se</a></small>
                <small class="form-text d-block mt-3"><a href="./">Esqueceu sua senha?</a></small>
            </div>

            <input class="form-control col-3 btn-block btn-primary mx-auto mt-4" type="submit" value="Login" id="login">

        </form>
    </div>

    <div class="modal animated fadeIn mx-auto" tabindex="-1" role="dialog" id="modalCadastro">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalCadastro">
                    <form action="../controller/validarCadastro.php" method="post" id="registerForm"
                        class="mx-auto col-sm-12">

                        <div id="modalCadastroPag1" class="d-block">
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="name">Nome<small>*</small></label>
                                    <input type="text" class="form-control" name="name" id="name">
                                    <small id="nameWarn"></small>
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="surname">Sobrenome<small>*</small></label>
                                    <input type="text" class="form-control" name="surname" id="surname">
                                    <small id="surnameWarn"></small>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="regUser">Usuário<small>*</small></label>
                                    <input type="text" class="form-control" name="regUser" id="regUser">
                                    <small id="userRegWarn"></small>
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="email">E-mail<small>*</small></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="exemplo@email.com">
                                    <small id="emailWarn"></small>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="regPass">Senha<small>*</small></label>
                                    <input type="password" class="form-control" name="regPass" id="regPass">
                                    <small id="passRegWarn"></small>
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="passConf">Confirmar senha<small>*</small></label>
                                    <input type="password" class="form-control" name="passConf" id="passConf">
                                    <small id="passConfWarn"></small>
                                </div>
                            </div>
                        </div>

                        <div id="modalCadastroPag2" class="d-none">
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="birth">Data de nascimento<small>*</small></label>
                                    <input type="date" class="form-control" name="birth" id="birth">
                                    <small id="birthWarn"></small>
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="gender">Sexo<small>*</small></label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="none" selected>Selecione</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                    <small id="sexWarn"></small>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="tel">Telefone</label>
                                    <input type="text" class="form-control" name="tel" id="tel">
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="cel">Celular</label>
                                    <input type="text" class="form-control" name="cel" id="cel">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="rg">RG<small>*</small></label>
                                    <input type="text" class="form-control" name="rg" id="rg">
                                    <small id="rgWarn"></small>
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="cpf">CPF<small>*</small></label>
                                    <input type="text" class="form-control" name="cpf" id="cpf">
                                    <small id="cpfWarn"></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <small class="form-text">* : Obrigatório</small>
                            </div>

                            <div class="form-group form-check mt-1">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">Eu aceito com os <a href="#">Termos de
                                        contrato</a></label>
                                <div>
                                    <small id="termsWarn"></small>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer mt-3 mx-auto">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-outline-primary" id="btnNext">Próximo</button>
                            <button type="button" class="btn btn-outline-primary d-none" id="btnBack">Voltar</button>
                            <input type="submit" value="Cadastrar" class="btn btn-primary d-none" id="registerBtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('node_modules/jquery/dist/jquery.js')?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.js')?>"></script>
    <script src="<?php echo base_url('node_modules/jquery-mask-plugin/dist/jquery.mask.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/sweetalert2/dist/sweetalert2.js')?>"></script>
    <script src="<?php echo base_url('assets/javascript/mainLoginCadastro.js')?>"></script>
    <script src="<?php echo base_url('assets/javascript/validarDados.js')?>"></script>
</body>

</html>