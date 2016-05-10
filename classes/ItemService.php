<?php

class ItemService{
    public function getItens() 
    {
        global $DB;
        $query = pg_query($DB, "SELECT id, item_descricao FROM item ORDER BY id;");

        if (!$query) 
        {
            echo "A query não foi executada ";
        } 

        $itens = [];

        while ($item = pg_fetch_object($query)) 
        {
            $itens[] = $item;
        }

        return $itens;
    }
    
    public function showItem($id) 
    {
        global $DB;
        $query = pg_query($DB, "SELECT * FROM item WHERE id=$id; ");

        if (!$query) 
        {
            echo "A query não foi executada ";
        }

        return pg_fetch_assoc($query);
    }
}

?>