<?php

require 'views/header.php';
require 'config.php';

class alterar
{
    public function redirect()
    {
        $redirect = "index.php";
        header("location:$redirect");
    }
    
    public function alterarItens()
    {
        global $DB;

        if (!isset($_POST["item_descricao"]) OR empty($_POST["item_descricao"]))
        {
            $_SESSION["erro"] = "O campo Nome está vazio";
            $this->redirect();
        }

        $nome = $_POST["item_descricao"];

        if (!isset($_POST["descricao_comp"]) OR empty($_POST["descricao_comp"]))
        {
            $_SESSION["erro"] = "O campo Descrição está vazio";
            $this->redirect();
        }

        $descricao = $_POST["descricao_comp"];

        if (!isset($_POST["reserva"]) OR empty($_POST["reserva"]))
        {
            $_SESSION["erro"] = "O campo Valor está vazio";
            $this->redirect();
        }

        $valor = $_POST["reserva"];

        if (!isset($_POST["descto"]) OR empty($_POST["descto"]))
        {
            $_SESSION["erro"] = "O campo dscto está vazio";
            $this->redirect();
        }

        $promocao = $_POST["descto"];
        
        $id = $_POST["id"];
        $nome = $_POST["item_descricao"];
        $descricao = $_POST["descricao_comp"];
        $valor = $_POST["reserva"];
        $promocao = $_POST["descto"];
        
               
        $query = pg_query($DB, "UPDATE item SET item_descricao='$nome', descricao_comp ='$descricao', reserva ='$valor', descto ='$promocao' WHERE id = $id");
        
        if (!$query)
        {
            echo "A query não foi executada ";
        }
        else
        {
            echo "<html>
                    <body>
                        <p>Dados alterados com sucesso!</p>
                    </body>
                  </html>";
        }
    }
}

$service = new alterar();
$item = $service->alterarItens();

?>