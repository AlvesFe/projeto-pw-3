//Evento responsavel por inserir animação após o carregamento do elemento
$('#loginForm').onload = $('#loginForm').addClass('animated fadeIn');

//função que leva a próxima página de cadastro
$("#btnNext").click(function () {
    $("#modalCadastroPag1").addClass("d-none");
    $("#modalCadastroPag1").removeClass("d-block");

    $("#modalCadastroPag2").removeClass("d-none");
    $("#modalCadastroPag2").addClass("d-block");

    $('#btnNext').hide();

    $('#btnBack').addClass("d-block");
    $('#btnBack').removeClass("d-none");

    $('#registerBtn').addClass("d-block");
    $('#registerBtn').removeClass("d-none");
});

//função que volta para a primeira página de cadastro
$("#btnBack").click(function () {
    $("#modalCadastroPag2").addClass("d-none");
    $("#modalCadastroPag2").removeClass("d-block");

    $("#modalCadastroPag1").removeClass("d-none");
    $("#modalCadastroPag1").addClass("d-block");

    $('#btnNext').show();

    $('#btnBack').addClass("d-none");
    $('#btnBack').removeClass("d-block");

    $('#registerBtn').addClass("d-none");
    $('#registerBtn').removeClass("d-block");
});

//função que adiciona mascaras aos campos de telefone, celular, cpf e rg
$(document).ready(function () {
    $('#tel').mask('(00) 0000-0000');
    $('#cel').mask('(00) 00000-0000');
    $('#rg').mask('00.000.000-0');
    $('#cpf').mask('000.000.000-00');
});