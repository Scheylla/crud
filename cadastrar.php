<?php
require 'views/header.php';
require 'config.php';

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
        

        if (!isset($_POST["item_descricao"]) OR empty($_POST["item_descricao"])) 
        {
            $_SESSION["erro"] = "O campo Nome está vazio";
            $this->redirect();
        }

        $nome = $_POST["item_descricao"];

        if (!isset($_POST["descricao_comp"])OR empty($_POST["descricao_comp"]))
        {
            $_SESSION["erro"] = "O campo Descrição está vazio";
            $this->redirect();
        }

        $descricao = $_POST["descricao_comp"];

        if (!isset($_POST["reserva"])OR empty($_POST["reserva"]))
        {
            $_SESSION["erro"] = "O campo Valor está vazio";
            $this->redirect();
        }

        $valor = $_POST["reserva"];

        if (!isset($_POST["descto"])OR empty($_POST["descto"]))
        {
            $_SESSION["erro"] = "O campo Promoção está vazio";
            $this->redirect();
        }

        $promocao = $_POST["descto"];

        $query = pg_query($DB, "SELECT max(id) FROM item; ");
        $maxId = pg_fetch_row($query)[0];
        $maxId = $maxId + 1;

        $query = pg_query($DB, "INSERT INTO item ( id, item_descricao, descricao_comp, reserva, descto)  VALUES ($maxId, '$nome', '$descricao', '$valor', '$promocao')  ORDER BY id ASC");

        if (!$query)
        {
            echo "A query não foi executada ";
        }
        else
        {
            echo "<html>
                    <body>
                        <p>Formulário enviado com sucesso!</p>
                    </body>
                  </html>";
        }
    }
}

$service = new cadastrar();
$item = $service->cadastrarItens();
?>

