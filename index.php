<?php

    require 'config.php';
    require 'classes/ItemService.php';
    include 'views/header.php';

    $service = new ItemService();
    $itens = $service->getItens ();

    if (isset ($_SESSION['login']))
    {
       include 'views/itens.php';
    }
    else
    {
      echo"
            <script>
                alert('Senha Incorreta');
                window.location='login.php'
            </script>";
    } 
    
    session_destroy();
    
?>