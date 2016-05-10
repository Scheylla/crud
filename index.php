<?php
require 'config.php';
require 'classes/ItemService.php';
include 'views/header.php';

$service = new ItemService();

$itens = $service->getItens();

?>

<html>
    <div class="col-md-3 col-sm-offset-4"> 
        <?php include 'views/itens.php'; ?>

    </div>
</html>