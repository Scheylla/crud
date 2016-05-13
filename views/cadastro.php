<?php
    require'../config.php';
    include 'header.php';

    if (isset ($_SESSION["erro"]))
    {
        echo $_SESSION["erro"];
        unset ($_SESSION["erro"]);
    }

    function old($campo)
    {
        if (isset ($_SESSION[$campo]))
        {
            return $_SESSION[$campo];
        }
        return "";
    }
?>

<html>

    <form id="formulario" class = "form-horizontal" method="post" action="cadastrar.php" novalidate="">

        <!--Form Name -->
        <legend>Formulario</legend>

        <div class = "form-group">
            <div class = "col-md-4">
                <input id = "id" name = "id" type="hidden"  placeholder = "" class = "form-control input-md" value="" >

            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "nome">Nome</label>
            <div class = "col-md-4">
                <input id = "nome" name = "item_descricao" type = "text" novalidate="" class = "form-control input-md" value="<?php echo old ("nome"); ?>">

            </div>
        </div>

        <!--Textarea -->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "descricao">Descrição</label>
            <div class = "col-md-4">
                <textarea class = "form-control" id = "descricao" name = "descricao_comp" novalidate="" value=""><?php echo old ("descricao"); ?></textarea>
            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "valor">Valor</label>
            <div class = "col-md-4">
                <input id = "valor" name = "reserva" type = "text" novalidate="" class = "form-control input-md" value="<?php echo old ("valor"); ?>">
            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "promocao">Promoção</label>
            <div class = "col-md-4">
                <input id = "promocao" name = "descto" type = "text" novalidate="" class = "form-control input-md" value="<?php echo old ("promocao"); ?>">
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
    unset ($_SESSION['nome']);
    unset ($_SESSION['descricao']);
    unset ($_SESSION['valor']);
    unset ($_SESSION['promocao']);


    include 'footer.php'; 
?>