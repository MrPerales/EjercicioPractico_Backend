<body>
<div>
    <a href="<?php echo base_url();?>index.php/formulario">
        crear nuevo
    </a>
</div>
<div>
    <table>
        <tr>
            <th>id</th>
            <th>Meta Title</th>
            <th>titulo</th>
            <th>Acciones</th>
        </tr>
        <?php
            foreach($articulos as $articulo){
                echo "<tr>";
                echo "<td>".$articulo['id']."</td>";
                echo "<td>".$articulo['meta_titulo']."</td>";
                echo "<td>".$articulo['titulo']."</td>";
                ?>
                <td>
                    <a href="<?php echo base_url();?>index.php/edit/<?php echo $articulo['id'];?>">
                        Editar
                    </a>
                </td>
                <td>
                    <a href="<?php echo base_url();?>index.php/eliminar/<?php echo $articulo['id'];?>">
                        Eliminar
                    </a>
                </td>
                <?php
                echo "</tr>";
            }
        ?>
   </table>
</div>
</body>