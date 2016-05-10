<?php

require 'views/header.php';
require 'config.php';

class excluir
{

    public function excluirItens()
    {
        global $DB; 
        
        $query = pg_query($DB, "DELETE * item WHERE id=$id");
        
        
    }

}
    
$service = new excluir();
$item = $service->excluirItens();

?>