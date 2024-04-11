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
                echo "<td>"."<button> Editar</button>"."</td>";
                echo "<td>"."<button>Eliminar</button>"."</td>";

                echo "</tr>";
            }
        ?>
   </table>
</div>
</body>