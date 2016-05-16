<?php

    require 'config.php';
    require 'sessao.php';

    class filtrar
    {

        public function filtrarItens()
        {

            global $DB;

            $_SESSION['nome'] = $_POST["nome"];
            $_SESSION['descricao'] = $_POST["descricao"];

            if (!isset ($_POST["nome"]) OR empty ($_POST["nome"]))
            {
                $_SESSION["erro"] = "O campo Nome está vazio";
            }
            else
            {
                
            }
        }

    }
?>