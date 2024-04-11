<body>
<div>
    <a href="<?php echo base_url();?>index.php/formulario">
        crear nuevo
    </a>
</div>
<div>
    <table>
        <tr >
            <th>id</th>
            <th>Meta Titulo</th>
            <th>titulo</th>
            <th>Meta descripcion</th>
            <th>descripcion</th>
            <th>imagen</th>
            <th>fecha de publicacion</th>
            <th>contenido </th>
            <th>Acciones</th>
        </tr>
        <?php
            foreach($articulos as $articulo){
                echo "<tr>";
                echo "<td>".$articulo['id']."</td>";
                echo "<td>".$articulo['meta_titulo']."</td>";
                echo "<td>".$articulo['titulo']."</td>";
                echo "<td>".$articulo['meta_descripcion']."</td>";
                echo "<td>".$articulo['descripcion']."</td>";
                echo "<td>".$articulo['imagen']."</td>";
                echo "<td>".$articulo['fecha_de_programacion']."</td>";
                echo "<td>".$articulo['contenido_del_articulo']."</td>";
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