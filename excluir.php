<?php

require 'views/header.php';
require 'config.php';

class excluir
{

    public function excluirItens()
    {
        global $DB; 
        
        $id = $_GET['id'];
        
        $query = pg_query($DB, "DELETE from item WHERE id= $id");
        
        if (!$query)
        {
            echo "A query não foi executada ";
        }
        else
        {
            echo "<h1>Dados excluidos com sucesso!</h1>";
        }
    }
}
 
$service = new excluir();
$item = $service->excluirItens();


include 'footer.php'; 

?>