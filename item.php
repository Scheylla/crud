<?php

    include 'views/header.php';

    require 'config.php';
    require 'classes/ItemService.php';

    if (!isset ($_GET["id"]))
    {
        header ("location:index.php");
        exit ();
    }

    $id = $_GET["id"];

    $service = new ItemService();
    $item = $service->showItem ($id);

    include 'views/detalhes.php';
    include 'views/footer.php';
?>
