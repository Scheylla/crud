<?php

require'../config.php';
include 'header.php';


if ( !isset( $_GET['id'] ) or empty( $_GET['id'] ) )
{
    exit("A variável não existe");
}


$id = $_GET["id"];

    
$query = pg_query($DB, "SELECT id, item_descricao, descricao_comp, reserva, descto FROM item WHERE id = $id ");

if (!$query) 
{
    exit("A query não foi executada");
}
    
    $item = pg_fetch_object($query);
    
    $nome = $item->item_descricao;
    $descricao = $item->descricao_comp;
    $reserva = $item->reserva;
    $descto =  $item->descto;
        
?>

<html>

    <form class = "form-horizontal" method="post" action="../alterar.php">

        <!--Form Name -->
        <legend>Formulario</legend>
        
        <div class = "form-group">
            <div class = "col-md-4">
                <input id = "id" name = "id" type="hidden" value="<?php echo $_GET['id'] ?>" class = "form-control input-md" >

            </div>
        </div>
        
        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "nome">Nome</label>
            <div class = "col-md-4">
                <input id = "nome" name = "item_descricao" type = "text" value="<?php echo $nome ?>" class = "form-control input-md" required = "">

            </div>
        </div>

        <!--Textarea -->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "descricao">Descrição</label>
            <div class = "col-md-4">
                <textarea class = "form-control" id = "descricao" name = "descricao_comp" required = ""><?php echo $descricao ?></textarea>
            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "valor">Valor</label>
            <div class = "col-md-4">
                <input id = "valor" name = "reserva" type = "text" value="<?php echo $reserva ?>" class = "form-control input-md" required = "">
            </div>
        </div>

        <!--Text input-->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "promocao">Promoção</label>
            <div class = "col-md-4">
                <input id = "promocao" name = "descto" type = "text" value="<?php echo $descto ?>" class = "form-control input-md" required = "">

            </div>
        </div>

        <!--Button -->
        <div class = "form-group">
            <label class = "col-md-4 control-label" for = "cadastrar"></label>
            <div class = "col-md-4">
                <button id = "atualizar" name = "atualizar" class = "btn btn-primary" type="submit">Atualizar</button>
            </div>
        </div>

    </form>
</html>