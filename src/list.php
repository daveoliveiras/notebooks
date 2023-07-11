<?php
    include "connection.php";
    $conn = new Connection();
    $list = $conn->getNotebook();
?>

<style>
    #table-list{
        background-color:red;
        margin-left: 50px;
        margin-right: 50px;
    }
</style>

<div id="table-list">
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
            
            <?php if($list != null): foreach($list as $notebook): if($notebook != null):?>
                <tr>
                    <th scope="row"><?php echo $notebook["key"]; ?></th>
                    <td><?php echo $notebook["marca"]; ?></td>
                    <td><?php echo $notebook["sistema"]; ?></td>
                    <td><?php echo $notebook["ram"]; ?></td>
                    <td>
                        <input type="button" value="Ver mais" onclick="seeMore(<?= $notebook['key'] ?>)"/>
                        <input type="button" value="Editar" onclick="toEdit(<?= $notebook['key'] ?>)"/>
                        <input type="button" value="Deletar" onclick="remove(<?= $notebook['key'] ?>)"/>
                    </td>
                </tr>
            <?php endif; endforeach; else:?>
                <script>
                    alert('Sem registros')
                </script>    
            <?php endif; ?>
            
        </tbody>
    </table>
</div>  