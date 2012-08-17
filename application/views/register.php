<?php $this->load->view('header'); ?>

      <script>        
        $(document).ready(function(){
          $("#regform").validate();
        });
      </script>
      <!-- Example row of columns -->
    <div class="well">
      <form class="form-horizontal" id="regform" action="<?=base_url().'event/registerUser'?>" method="POST">
       <fieldset>
        <legend>Registro Cocha Valley</legend>

        
      <div class="row">
        <div class="span1">
          <div class="control-group" style="margin-right: -80px;">

          <img class="thumbnail"  src="https://graph.facebook.com/<?=$fid?>/picture?type=large">
          <!--
          <img src="http://www.strangebeaver.com/wp-content/uploads/2011/01/fb/1.jpg">
          <p><a class="btn" href="#">Subir foto </a></p>
          -->
          <br>
          <img src="http://dcbdluf1ahqio.cloudfront.net/facebook/32x32.png">
            
          </div>

        </div>
        <div class="span4">

            <div class="control-group">
              <label class="control-label" for="input01">Nombre:</label>
              <div class="controls">
                <input type="text" class="input-medium required" id="first_name" name="first_name" value="<?=$first_name?>">
                <input type="hidden"  id="id" name="id" value="<?=$id?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">Apellido:</label>
              <div class="controls">
                <input type="text" class="input-medium required" id="last_name" name="last_name" value="<?=$last_name?>">
              </div>
            </div>
           <div class="control-group">
              <label class="control-label" for="input01">Email:</label>
              <div class="controls">
                <input type="text" class="input-medium" id="email" readonly name="email" value="<?=$email?>">
              </div>
            </div>
        </div>
        <div class="span5">
          <div class="control-group">
            <label class="control-label" for="multiSelect">Tus roles:</label>
            <div class="controls">
              <select multiple="multiple" class="required" id="role" name="role[]" size="7">
                <option <? if(in_array('Designer',$role)) echo 'selected' ?> >Designer</option>
                <option <? if(in_array('Developer',$role)) echo 'selected' ?> >Developer</option>
                <option <? if(in_array('Entrepreneur',$role)) echo 'selected' ?> >Entrepreneur</option>
                <option <? if(in_array('Marketer',$role)) echo 'selected' ?> >Marketer</option>
                <option <? if(in_array('Manager/CEO',$role)) echo 'selected' ?> >Manager/CEO</option>
                <option <? if(in_array('Investor',$role)) echo 'selected' ?> >Investor</option>
                <option <? if(in_array('Other',$role)) echo 'selected' ?> >Other</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span5">
           <div class="control-group">
              <label class="control-label" for="input01">Intereses/Tags:</label>
              <div class="controls">
                <input class="input-xlarge required" id="tags" name="tags" value="<?=$tags?>">
              </div>
            </div>
        </div>
        <div class="span5">
          <div class="control-group">
            <label class="control-label" for="multiSelect">Estas buscando:</label>
            <div class="controls">
              
          <select multiple="multiple" class="required" id="looking" name="looking[]" size="7">
                <option <? if(in_array('Co-founder',$looking)) echo 'selected' ?> >Co-founder</option>
                <option <? if(in_array('Developers',$looking)) echo 'selected' ?> >Developers</option>
                <option <? if(in_array('Designers',$looking)) echo 'selected' ?> >Designers</option>
                <option <? if(in_array('Funding',$looking)) echo 'selected' ?> >Funding</option>
                <option <? if(in_array('Manager/CEO',$looking)) echo 'selected' ?> >Manager/CEO</option>
                <option <? if(in_array('Sales/Marketer',$looking)) echo 'selected' ?> >Sales/Marketer</option>
                <option <? if(in_array('Networking',$looking)) echo 'selected' ?> >Networking</option>
                <option <? if(in_array('Other',$looking)) echo 'selected' ?> >Other</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span5">
           <div class="control-group">
              <label class="control-label" for="input01">Tus Links (separados por coma):</label>
              <div class="controls">
                <input class="input-large"  id="links" name="links" value="<?=$links?>">
              </div>
            </div>
        </div>
        <div class="span5">
          <div class="control-group">
              <label class="control-label" for="input01">Empresa / Instituci&oacute;:</label>
              <div class="controls">
                <input type="text" class="input-large required" id="company" name="company" value="<?=$company?>">
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span5">
          <div class="control-group">
              <label class="control-label" for="input01">Usuario Twitter:</label>
              <div class="controls">
                <div class="input-prepend">
                  <span class="add-on">@</span>
                  <input type="text" class="span2" id="twitter" name="twitter" value="<?=$twitter?>">
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span10">
            <h3>Confirmar tu participaci&oacute;n para ek evento del 18/08/2012</h3><br>
            <div class="alert alert-info">
             <strong> Solo las personas que confirmen su presencia (click en Chuck Norris) podran ingresar al evento. Las plazas son limitadas, apelamos a su honestidad. Estos datos pueden ser modificados posteriormente.
             </strong>
            </div><br>
            <div class="control-group"  >
            <div class="controls" style="margin-left: 10px;">
              <label class="radio" >
                <img width=120 src="http://www.infamouskidd.com/wp-content/uploads/2011/09/chuck-norris-thumbs-up.jpg">
                  <input type="radio" name="going" id="optionsRadios1" value="sure" <? if($going=='sure') echo 'checked'?> >
                Seguro voy a ir!  
              </label>
              <label class="radio">
                <img src="http://us12.memecdn.com/busy_o_424301.jpg" width=120>
                <input type="radio" name="going" id="optionsRadios2" value="nop" <? if($going=='nop') echo 'checked'?> >
                Quiero ir pero no puedo. Igual quiero registrarme a cocha valley y conectarme con el resto.
              </label>
              <label class="radio">
                <img  width=120 src="http://i0.kym-cdn.com/entries/icons/original/000/005/180/fuckthat.jpg">
                <input type="radio" name="going" id="optionsRadios2" value="maybe" <? if($going=='maybe') echo 'checked'?> >
                Todavia no decido. Igual quiero registrarme a cocha valley y conectarme con el resto.
              </label>
            </div>
          </div>
        </div>
      </div>
      
      </fieldset>

      
      
      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Guadar</button>
        <button class="btn">Cancelar</button>
      </div>
      </form>
    </div>
      <script>
        $('#tags').tagsInput({width: '240px'});
        $('#links').tagsInput({width: '240px', defaultText:'add a Link'});          
        $(document).ready(function(){
          $("#regform").validate();
        });
      </script>
<?php $this->load->view('footer'); ?>
