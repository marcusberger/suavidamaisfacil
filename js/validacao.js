$(document).ready(function() {
    //Validação dos campos no submit do form principal
    $("#formCadastro").submit(function () {

        var nome = $("#nome").val();
        var email = $("#email").val();

        $("#nome-db").val(nome);
        $("#email-db").val(email);

        $("#nome").val('');
        $("#email").val('');

    })

    $("#formCadastroModal").submit(function () {

        var nome = $("#nome-modal").val();
        var email = $("#email-modal").val();

        $("#nome-db-modal").val(nome);
        $("#email-db-modal").val(email);

        $("#nome-modal").val('');
        $("#email-modal").val('');

        $('#modalCadastro').modal('toggle');
    })

})