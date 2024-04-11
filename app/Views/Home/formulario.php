<div>
   <!-- <label for="titulo">titulo</label>
   <label for="metatitulo">meta titulo</label> -->
<?php
    if(isset($articulos)){
        $titulo=$articulos[0]['titulo'];
        $meta_titulo=$articulos[0]['meta_titulo'];
    }
    else{
        $titulo="";
        $meta_titulo="";
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
