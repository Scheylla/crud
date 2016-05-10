<?php include 'views/header.php'; ?>

<div class="col-md-4 col-sm-offset-4"> 
    <table class='table' border='2px' cellspacing='0' cellpadding='0'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Produto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($item as $key => $value): ?>

                <tr>
                    <td><?php echo "$key" ?></td>
                    <td><?php echo "$value" ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    
    <button class="btn"><a href="index.php">Voltar</a></button>
</div>

<?php include 'views/footer.php'; ?>