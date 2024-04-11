<div>
   <!-- <label for="titulo">titulo</label>
   <label for="metatitulo">meta titulo</label> -->
    <?php
    echo form_open('/Home/guarda');
    echo form_label('Inserte Titulo', 'titulo');
    echo form_input(array('name'=>'titulo',"placeholder"=>'titulo'));
    echo '<br>';
    echo form_label('Inserte Meta Titulo', 'metaTitulo');
    echo form_input(array('name'=>'metaTitulo',"placeholder"=>'Metatitulo'));
    echo '<br>';
    echo form_submit('enviar','Enviar');
    echo form_close();
    
    ?>
</div>