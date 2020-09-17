//função que adiciona mascaras aos campos de telefone, celular, cpf e rg
$(document).ready(function () {
    $('#price').mask('00.00', { reverse: true });
    $('#barCode').mask('0.000000.000000');
    $('#stock').mask('0000');
});

function validarRegistro(campo, nomeCampo) {
    campo.nextElementSibling.innerHTML = "Campo " + nomeCampo + " obrigatório";
    campo.nextElementSibling.style.color = '#d20000';
    campo.nextElementSibling.classList.add('animated', 'flash');

    campo.classList.add('is-invalid');
}

//Função para adicionar alerta em campos ja existentes
function validarExistente(campo, nomeCampo) {
    campo.nextElementSibling.innerHTML = nomeCampo + " já cadastrado!";
    campo.nextElementSibling.style.color = '#d20000';
    campo.nextElementSibling.classList.add('animated', 'flash');

    campo.classList.add('is-invalid');
}

//Função para limpar as mensagens de erro
function clearFields(campo) {
    if (campo.classname == "form-control is-invalid" && campo.nextElementSibling.innerHTML != "") {
        campo.nextElementSibling.innerHTML = "";
        campo.nextElementSibling.classList.remove('animated', 'flash');
        campo.classList.remove('is-invalid');
    }
}

const prodName = document.querySelector('#prodName');
const barCode = document.querySelector('#barCode');
const description = document.querySelector('#description');
const price = document.querySelector('#price');
const stock = document.querySelector('#stock');

//função para validar o cadastro
$(function () {
    $('#registerForm').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {

                //Primeira página

                if (data == "ErroNomeProduto") {
                    validarRegistro(prodName, "nome");
                }
                else {
                    clearFields(prodName);
                }

                if (data == "ErroCodBarras") {
                    validarRegistro(barCode, "código de barras");
                }
                else if (data == "ErroTamanhoCodBarras") {
                    barCode.nextElementSibling.innerHTML = "Código de barras deve possuir 13 digitos!";
                    barCode.nextElementSibling.style.color = '#d20000';
                    barCode.nextElementSibling.classList.add('animated', 'flash');

                    barCode.classList.add('is-invalid');
                }
                else if (data == "ErroCodBarrasExistente") {
                    validarExistente(barCode, "código de barras");
                }
                else {
                    clearFields(barCode);
                }

                if (data == "ErroDescricao") {
                    validarRegistro(description, "descrição");
                }
                else {
                    clearFields(description);
                }

                if (data == "ErroPreco") {
                    validarRegistro(price, "preço");
                }
                else {
                    clearFields(price);
                }

                if (data == "ErroEstoque") {
                    validarRegistro(stock, "estoque");
                }
                else {
                    clearFields(stock);
                }

                switch (data) {

                    case "FalhaCadastro":
                        Swal.fire({
                            customClass: {
                                popup: 'alertCustom'
                            },
                            icon: "error",
                            titleText: "Falha no cadastro",
                            text: 'Tente novamente mais tarde'
                        });
                        break;

                    default:
                        Swal.fire({
                            customClass: {
                                popup: 'alertCustom'
                            },
                            icon: "success",
                            titleText: "Cadastro concluído",
                            text: 'O produto foi registrado'
                        });
                        break;
                }
            },
        });
        return false;
    });
});