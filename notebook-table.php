<?php
    include "connection.php";

    $conn = new Connection();
    $list = $conn->allNotebooks();
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Sistema</th>
            <th scope="col">RAM</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list as $notebook): ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $notebook["marca"]; ?></td>
                <td><?php echo $notebook["sistema"]; ?></td>
                <td><?php echo $notebook["ram"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>