<?php

header('Content-Type: application/json');
require 'config.php';
require 'sessao.php';

class cadastrar
{
    public $redirect = "/Banco/views/cadastro.php";

    public function redirect()
    {
        header("location:$this->redirect");
        exit;
    }

    public function cadastrarItens()
    {
        global $DB;
        
        $_SESSION['nome'] = $_POST["nome"];
        $_SESSION['descricao'] = $_POST["descricao"];
        $_SESSION['valor'] = $_POST["valor"];
        $_SESSION['promocao'] = $_POST["promocao"];
        

        if (!isset($_POST["nome"]) OR empty($_POST["nome"])) 
        {
            $_SESSION["erro"] = "O campo Nome está vazio";
            $this->redirect();
        }

        $nome = $_POST["nome"];

        if (!isset($_POST["descricao"])OR empty($_POST["descricao"]))
        {
            $_SESSION["erro"] = "O campo Descrição está vazio";
            $this->redirect();
        }

        $descricao = $_POST["descricao"];

        if (!isset($_POST["valor"])OR empty($_POST["valor"]))
        {
            $_SESSION["erro"] = "O campo Valor está vazio";
            $this->redirect();
        }

        $valor = $_POST["valor"];

        if (!isset($_POST["promocao"])OR empty($_POST["promocao"]))
        {
            $_SESSION["erro"] = "O campo Promoção está vazio";
            $this->redirect();
        }

        $promocao = $_POST["promocao"];

        $query = pg_query($DB, "SELECT max(id) FROM item; ");
        $maxId = pg_fetch_row($query)[0];
        $maxId = $maxId + 1;

        $query = pg_query($DB, "INSERT INTO item ( id, item_descricao, descricao_comp, reserva, descto)  VALUES ($maxId, '$nome', '$descricao', '$valor', '$promocao')");

        if (!$query)
        {
            echo json_encode (array("success" => false));
        }
        else
        {
            echo json_encode (array("success" => true));
            
            //(['success'=> true]);
        }
        
               
        unset($_SESSION['nome']);
        unset($_SESSION['descricao']);
        unset($_SESSION['valor']);
        unset($_SESSION['promocao']);
    }
}

$service = new cadastrar();
$item = $service->cadastrarItens();

?>