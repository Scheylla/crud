<?php
    require 'config.php';
    include'views/header.php';
?>

<form class="form-horizontal" method="post" action="verificar.php" id="formlogin" name="formlogin" >
    <fieldset>

        <br><br><br>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Login</label>  
            <div class="col-md-4">
                <input id="login" name="login" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Senha</label>
            <div class="col-md-4">
                <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
                <button id="" name="" class="btn btn-primary">Entrar</button>
            </div>
        </div>

    </fieldset>
</form>


<?php
    if ((!isset ($_SESSION['login']) == true) and ( !isset ($_SESSION['senha']) == true))
    {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
    }else
    {
        $logado = $_SESSION['login'];
    }

    
?>