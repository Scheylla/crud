//excluir

$(function () {

    $(".delete").click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "excluir.php?id=" + id,
            success: function () {
                $("tr[data-id=" + id + "]").slideUp('slow', function () {
                    $(this).remove();
                });
                $('#load').fadeOut();
            }
        });
        return false;
    });
});

//cadastrar

$(function () {
    $("#formulario").submit(function (event) {
        event.preventDefault();
        var nome = $("#nome").val();
        var descricao = $("#descricao").val();
        var valor = $("#valor").val();
        var promocao = $("#promocao").val();

        $.post('/Banco/cadastrar.php',
                {nome: nome, descricao: descricao, valor: valor, promocao: promocao},
                function (data) {
                    
                    //console.log(data);
                    
                    if (data.success == true) {
                        alert('Cadastro realizado com sucesso!');
                    } else {
                        alert('Cadastro não realizado!');
                    }
                }
        );
    });


//alterar

    $("#form").submit(function (event) {
        event.preventDefault();
        var id = $("#id").val();
        var nome = $("#nome").val();
        var descricao = $("#descricao").val();
        var valor = $("#valor").val();
        var promocao = $("#promocao").val();

        $.post("/Banco/alterar.php?id=" + id,
                {nome: nome, descricao: descricao, valor: valor, promocao: promocao},
                function (data) {
                    
                    //console.log(data);
                    
                    if (data.success == true) {
                        alert('Alteração realizada com sucesso!');
                    } else {
                        alert('Alteração não realizada!');
                    }
                }
        );
    });
});

