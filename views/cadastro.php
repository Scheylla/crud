<?php

require'../config.php';
include 'header.php';
//require 'classes/Validacao.php';
//require 'classes/CadastroItens.php';

if (isset($_SESSION["erro"]))
{
   echo $_SESSION["erro"];
   unset($_SESSION["erro"]);
}
//value e sessao
?>

<html>
    <!-- <script language="JavaScript" >
            function enviardados() {

                if (document.dados.nome.value == "" || document.dados.nome.value.length < 3)
                {
                    alert("Preencha o campo NOME corretamente!");
                    document.dados.tx_nome.focus();
                    return false;
                }

                if (document.dados.descricao.value == "" || document.dados.descricao.value.length < 50)
                {
                    alert("Preencha o campo DESCRIÇÃO corretamente!");
                    document.dados.tx_nome.focus();
                    return false;
                }

                if (document.dados.valor.value == "" || document.dados.valor.value.length isNaN)
                {
                    alert("Preencha o campo VALOR corretamente!");
                    document.dados.tx_nome.focus();
                    return false;
                }

                if (document.dados.promocao.value == "" || document.dados.promocao.value.length isNaN)
                {
                    alert("Preencha o campo PROMOÇÃO corretamente!");
                    document.dados.tx_nome.focus();
                    return false;
                }

                return true;
            }

        </script> -->

    <form class = "form-horizontal" method="post" action="../cadastrar.php" novalidate="">

        <!--Form Name -->
        <legend>Formulario</legend>
        
        <div class = "form-group">
            <div class = "col-md-4">
                <input id = "id" name = "id" type="hidden"  placeholder = "" class = "form-control input-md" >

            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "nome">Nome</label>
            <div class = "col-md-4">
                <input id = "nome" name = "item_descricao" type = "text" placeholder = "" class = "form-control input-md" required = "">

            </div>
        </div>

        <!--Textarea -->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "descricao">Descrição</label>
            <div class = "col-md-4">
                <textarea class = "form-control" id = "descricao" name = "descricao_comp" required = ""></textarea>
            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "valor">Valor</label>
            <div class = "col-md-4">
                <input id = "valor" name = "reserva" type = "text" placeholder = "" class = "form-control input-md" required = "">
            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "promocao">Promoção</label>
            <div class = "col-md-4">
                <input id = "promocao" name = "descto" type = "text" placeholder = "" class = "form-control input-md" required = "">

            </div>
        </div>

        <!--Button -->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "cadastrar"></label>
            <div class = "col-md-4">
                <button id = "cadastrar" name = "cadastrar" class = "btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </div>

    </form>
</html>

<?php
/* $valida = new Validacao();

echo $valida->validarCampo("Nome", $nome, "25", "2");
echo $valida->validarCampo("Descrição", $descricao, "200", "50");
echo $valida->validarNumero("Valor", $valor);
echo $valida->validarNumero("Promocao", $promocao);

if ($valida->verifica())
{
    echo "Os dados estão OK";
}
*/
?>