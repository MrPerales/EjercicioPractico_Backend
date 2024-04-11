<div>
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

    echo form_label('Inserte Titulo', 'titulo');
    echo form_input(array('name'=>'titulo',"placeholder"=>'titulo',"value"=>$titulo));
    echo '<br>';

    echo form_label('Inserte Meta Titulo', 'meta_titulo');
    echo form_input(array('name'=>'meta_titulo',"placeholder"=>'Meta titulo',"value"=>$meta_titulo));
    echo '<br>';

    echo form_label('Inserte Meta Descripcion', 'meta_descripcion');
    echo form_textarea(array('name'=>'meta_descripcion',"placeholder"=>'Meta descripcion',"value"=>$meta_descripcion));
    echo '<br>';

    echo form_label('Inserte Descripcion', 'descripcion');
    echo form_textarea(array('name'=>'descripcion',"placeholder"=>'descripcion',"value"=>$descripcion));
    echo '<br>';
    
    echo form_label('Inserte link de la Imagen', 'imagen');
    echo form_input(array('name'=>'imagen',"placeholder"=>'imagen',"value"=>$imagen));
    echo '<br>';

    echo form_label('Inserte contenido del articulo', 'contenido_del_articulo');
    echo form_textarea(array('name'=>'contenido_del_articulo',"placeholder"=>'Contenido del articulo',"value"=>$contenido_del_articulo));
    echo '<br>';

    echo form_label('Inserte fecha de publicacion', 'fecha_de_programacion');
    echo form_input(array('name'=>'fecha_de_programacion', 'type'=>"date","value"=>$fecha_de_programacion));
    echo '<br>';





    echo form_submit('enviar','Enviar');
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
