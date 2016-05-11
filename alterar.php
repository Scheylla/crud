<?php
    include 'views/header.php';
    include 'views/body.php';
    require 'config.php';

    function redirect($url){
        header ("Location: $url");
        exit;
    }
    

    class alterar
    {

        public function getRedirectIUrl($id){
            return "views/alteracao.php?id=$id";
        }
        
        public function alterarItens()
        {
            global $DB;
            
            $_SESSION['nome'] = $_POST["item_descricao"];
            $_SESSION['descricao'] = $_POST["descricao_comp"];
            $_SESSION['valor'] = $_POST["reserva"];
            $_SESSION['promocao'] = $_POST["descto"];
            
            $id = $_POST['id'];

            if (!isset ($_POST["item_descricao"]) OR empty ($_POST["item_descricao"]))
            {
                $_SESSION["erro"] = "O campo Nome está vazio";
                redirect ($this->getRedirectIUrl($id));
            }

            $nome = $_POST["item_descricao"];

            if (!isset ($_POST["descricao_comp"]) OR empty ($_POST["descricao_comp"]))
            {
                $_SESSION["erro"] = "O campo Descrição está vazio";
                redirect ($this->getRedirectIUrl($id));
            }

            $descricao = $_POST["descricao_comp"];

            if (!isset ($_POST["reserva"]) OR empty ($_POST["reserva"]))
            {
                $_SESSION["erro"] = "O campo Valor está vazio";
                redirect ($this->getRedirectIUrl($id));
            }

            $valor = $_POST["reserva"];

            if (!isset ($_POST["descto"]) OR empty ($_POST["descto"]))
            {
                $_SESSION["erro"] = "O campo Promoção está vazio";
                redirect ($this->getRedirectIUrl($id));
            }

            
            $promocao = $_POST["descto"];


            
            $query = pg_query ($DB, "UPDATE item SET item_descricao='$nome', descricao_comp ='$descricao', reserva ='$valor', descto ='$promocao' WHERE id = $id");

            if (!$query)
            {
                echo "A query não foi executada ";
            }
            else
            {
                echo "<h1>Dados alterados com sucesso!</h1>";
            }
            
            unset($_SESSION['nome']);
            unset($_SESSION['descricao']);
            unset($_SESSION['valor']);
            unset($_SESSION['promocao']);
        }

    }

    $service = new alterar();
    $item = $service->alterarItens ();
?>

<html>
    <body>
        <div class="col-md-4 col-sm-offset-3">
            <br><br>
            
            <button class="btn"><a href="index.php">Voltar</a></button>
        </div>
    </body>
</html>