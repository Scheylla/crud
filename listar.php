<?php
require 'config.php';
require 'classes/ItemService.php';
include 'views/header.php';

$service = new ItemService();

$itens = $service->getItens();

include 'views/itens.php'; ?>
