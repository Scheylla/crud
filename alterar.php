<?php
    header('Content-Type: application/json');
    require 'config.php';

    function redirect($url)
    {
        header ("Location: $url");
        exit;
    }

    class alterar
    {

        public function getRedirectIUrl($id)
        {
            return "views/alteracao.php?id=$id";
        }

        public function alterarItens()
        {
            global $DB;

            $_SESSION['nome'] = $_POST["nome"];
            $_SESSION['descricao'] = $_POST["descricao"];
            $_SESSION['valor'] = $_POST["valor"];
            $_SESSION['promocao'] = $_POST["promocao"];

            $id = $_GET['id'];

            if (!isset ($_POST["nome"]) OR empty ($_POST["nome"]))
            {
                $_SESSION["erro"] = "O campo Nome está vazio";
                redirect ($this->getRedirectIUrl ($id));
            }

            $nome = $_POST["nome"];

            if (!isset ($_POST["descricao"]) OR empty ($_POST["descricao"]))
            {
                $_SESSION["erro"] = "O campo Descrição está vazio";
                redirect ($this->getRedirectIUrl ($id));
            }

            $descricao = $_POST["descricao"];

            if (!isset ($_POST["valor"]) OR empty ($_POST["valor"]))
            {
                $_SESSION["erro"] = "O campo Valor está vazio";
                redirect ($this->getRedirectIUrl ($id));
            }

            $valor = $_POST["valor"];

            if (!isset ($_POST["promocao"]) OR empty ($_POST["promocao"]))
            {
                $_SESSION["erro"] = "O campo Promoção está vazio";
                redirect ($this->getRedirectIUrl ($id));
            }

            $promocao = $_POST["promocao"];

            $query = pg_query ($DB, "UPDATE item SET item_descricao='$nome', descricao_comp ='$descricao', reserva ='$valor', descto ='$promocao' WHERE id = $id");

            if (!$query)
            {
                echo json_encode (array("success" => false));
            }
            else
            {
                echo json_encode (array("success" => true));

                //(['success'=> true]);
            }

            unset ($_SESSION['nome']);
            unset ($_SESSION['descricao']);
            unset ($_SESSION['valor']);
            unset ($_SESSION['promocao']);
        }
    }

    $service = new alterar();
    $item = $service->alterarItens ();
?>