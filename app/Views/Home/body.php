<body>
    <div class="flex justify-center items-center h-20">
        <a  
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2" 
            href="<?php echo base_url();?>index.php/formulario"
         >
            Crear nuevo
         </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">

                <tr >
                     <th class="px-6 py-3">
                        id
                    </th>
                    <th class="px-6 py-3">
                        Meta Titulo
                    </th>
                    <th class="px-6 py-3">
                        titulo
                    </th>
                    <th class="px-6 py-3">
                     Meta descripcion
                    </th>
                    <th class="px-6 py-3">
                        descripcion
                    </th>
                    <th class="px-6 py-3">
                        imagen
                    </th>
                    <th class="px-6 py-3">
                        fecha de publicacion
                    </th>
                    <th class="px-6 py-3">
                        contenido 
                    </th>
                    <th class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
        <tbody>

            <?php
            foreach($articulos as $articulo){
                echo "<tr>";
                echo "<td class='px-6 py-4'>".$articulo['id']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['meta_titulo']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['titulo']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['meta_descripcion']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['descripcion']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['imagen']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['fecha_de_programacion']."</td>";
                echo "<td class='px-6 py-4'>".$articulo['contenido_del_articulo']."</td>";
                ?>
                <td>
                    <a 
                        class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 "
                        href="<?php echo base_url();?>index.php/edit/<?php echo $articulo['id'];?>"
                    >
                        
                        Editar
                    </a>
                </td>
                <td>
                    <a 
                        class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2"
                        href="<?php echo base_url();?>index.php/eliminar/<?php echo $articulo['id'];?>"
                    >
                        Eliminar
                    </a>
                </td>
                <?php
                echo "</tr>";
            }
            ?>
            </tbody>
   </table>
</div>
</body>