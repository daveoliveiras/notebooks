<?php
    include "connection.php";
    $conn = new Connection();
    $list = $conn->createNotebook();
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Marca</th>
            <th scope="col">Sistema</th>
            <th scope="col">RAM</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php if($list != null): foreach($list as $notebook): ?>

            <tr>
                <th scope="row"><?php echo $notebook["id"]; ?></th>
                <td><?php echo $notebook["marca"]; ?></td>
                <td><?php echo $notebook["sistema"]; ?></td>
                <td><?php echo $notebook["ram"]; ?></td>
                <td>
                    <input type="button" value="Ver mais" onclick="openNotebook(<?php echo $notebook['id'] ?>)"/>
                </td>
            </tr>

        <?php endforeach; endif; ?>
        
    </tbody>
</table>