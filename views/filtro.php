<?php
    include 'views/header.php';
?>

<html>
    <body>
        <br><br><form id="filtrar" class = "form-horizontal" method="post" action="" novalidate="">

            <legend>Filtrar</legend>

            <div class = "form-group">
                <label class = "col-md-4 control-label" for = "nome">Nome</label>
                <div class = "col-md-4">
                    <input id = "nome" name = "nome" type = "text" novalidate="" class = "form-control input-md" value="">

                </div>
            </div>

            <div class = "form-group">
                <label class = "col-md-4 control-label" for = "descricao">Descrição</label>
                <div class = "col-md-4">
                    <textarea class = "form-control" id = "descricao" name = "descricao" novalidate="" value=""></textarea>
                </div>
            </div>

            <!--Button -->
            <div class = "form-group">
                <label class = "col-md-4 control-label" for = "cadastrar"></label>
                <div class = "col-md-4">
                    <button id = "filtrar" name = "filtrar" class = "btn btn-primary" type="submit">Filtrar</button>
                </div>
            </div>
            
        </form><br><br>
    </body>
</html>