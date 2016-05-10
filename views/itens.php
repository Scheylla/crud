 <?php include 'views/header.php'; ?>

<table class='table' border='2px' cellspacing='0' cellpadding='0'>
    <thead>
        <tr>
            <th>Id</th>
            <th>Produto</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($itens as $item) : ?>
            <tr>
                <td><a href="item.php?id=<?php echo $item->id ?>"><?php echo $item->id ?></a></td>
                <td><?php echo $item->item_descricao ?></td>
                <td>
                    <button class="btn"><a href="views/alteracao.php?id=<?php echo $item->id ?>"><span class="glyphicon glyphicon-pencil"></span></a></button>
                    <button class="btn"><a href="views/exclusao.php?id=<?php echo $item->id ?>"><span class="glyphicon glyphicon-trash"></span></a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<button class="btn"><a href="views/cadastro.php">Cadastrar Itens</a></button>



<?php include 'views/footer.php'; ?>
