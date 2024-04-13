<div class='flex flex-row justify-center items-center gap-10 '>
   <!-- <label for="titulo">titulo</label>
   <label for="metatitulo">meta titulo</label> -->
<?php
    if(isset($articulos)){
        $titulo=$articulos[0]['titulo'];
        $meta_titulo=$articulos[0]['meta_titulo'];
        $meta_descripcion=$articulos[0]['meta_descripcion'];
        $descripcion=$articulos[0]['descripcion'];
        $imagen=$articulos[0]['imagen'];
        $contenido_del_articulo=$articulos[0]['contenido_del_articulo'];
        $fecha_de_programacion=$articulos[0]['fecha_de_programacion'];
    }
    else{
        $titulo="";
        $meta_titulo="";
        $meta_descripcion="";
        $descripcion="";
        $imagen="";
        $contenido_del_articulo="";
        $fecha_de_programacion="";
    }
?>


    <?php
        echo form_open('/guarda');

        echo form_label('Inserte Titulo', 'titulo',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_input(array(
            'name'=>'titulo',
            "placeholder"=>'titulo',
            "value"=>$titulo,
            "class"=>"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-1/2 p-2.5",
         ));

        echo form_label('Inserte Meta Titulo', 'meta_titulo',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_input(array(
            'name'=>'meta_titulo',
            "placeholder"=>'Meta titulo',
            "value"=>$meta_titulo,
            "class"=>"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-1/2 p-2.5"
         ));

        echo form_label('Inserte Meta Descripcion', 'meta_descripcion',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_textarea(array(
            'name'=>'meta_descripcion',
            "placeholder"=>'Meta descripcion',
            "value"=>$meta_descripcion,
            "class"=>"block p-2.5 w-72 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300  "

        ));

        echo form_label('Inserte Descripcion', 'descripcion',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_textarea(array(
            'name'=>'descripcion',
            "placeholder"=>'descripcion',
            "value"=>$descripcion ,
            "class"=>"block p-2.5 w-72 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300  "
        ));
    
    echo form_label('Inserte link de la Imagen', 'imagen',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_input(array(
         'name'=>'imagen',
          "placeholder"=>'imagen',
          "value"=>$imagen,
          "class"=>"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-1/2 p-2.5"
        ));

    echo form_label('Inserte contenido del articulo', 'contenido_del_articulo',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_textarea(array(
            'name'=>'contenido_del_articulo',
            "placeholder"=>'Contenido del articulo',
            "value"=>$contenido_del_articulo,
            "class"=>"block p-2.5 w-72 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300  "
        ));

        echo form_label('Inserte fecha de publicacion', 'fecha_de_programacion',["class"=>"block mb-2 text-sm font-medium text-gray-900 "]);
        echo form_input(array(
            'name'=>'fecha_de_programacion',
            'type'=>"date",
            "value"=>$fecha_de_programacion,
        ));

        echo form_submit('enviar','Enviar',["class"=>"text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5 block"]);
        if(isset($articulos)){
            echo form_hidden('id',$articulos[0]['id']);
        }
        // if(isset($check)){
        //         echo    "<div>
        //                  <span>accion completada</span>
        //                 </div>";
        //                 " <a href="echo base_url()/index.php> regresar</a>"
        //     }
        echo form_close();
        
    ?>
</div>
