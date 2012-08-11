<?php $this->load->view('header'); ?>


      <!-- Example row of columns -->
      <div class="row well">
        <div class="span3">
          <img class="thumbnail"  src="https://graph.facebook.com/<?=$fid?>/picture?type=large">
          <!--
          <img src="http://www.strangebeaver.com/wp-content/uploads/2011/01/fb/1.jpg">
          <p><a class="btn" href="#">Subir foto </a></p>
          -->
          <br>
          <img src="http://dcbdluf1ahqio.cloudfront.net/facebook/32x32.png">
        </div>
        <div class="span8">
         <form class="form-horizontal" action="<?=base_url().'index/registerUser'?>" method="POST">
          <fieldset>
            <legend>Registro Cocha Valley</legend>
            <div class="control-group">
              <label class="control-label" for="input01">Nombre</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="first_name" name="first_name" value="<?=$first_name?>">
                <input type="hidden"  id="id" name="id" value="<?=$id?>">

              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">Apellido</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="last_name" name="last_name" value="<?=$last_name?>">
              </div>
            </div>
           <div class="control-group">
              <label class="control-label" for="input01">Email</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="email" name="email" value="<?=$email?>">
              </div>
            </div>
           <div class="control-group">
              <label class="control-label" for="input01">Intereses/Tags</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="tags" name="tags" value="<?=$tags?>">
              </div>
            </div>
            <div class="control-group">
            <label class="control-label">Confirmar tu participacion</label>
            <div class="controls">
              <label class="radio">
                <img width=120 src="http://www.infamouskidd.com/wp-content/uploads/2011/09/chuck-norris-thumbs-up.jpg"> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Seguro voy a ir!  
              </label>
              <label class="radio">
                <img src="http://us12.memecdn.com/busy_o_424301.jpg" width=120>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Quiero ir pero no voy a poder, igual quiero conectarme con los demas por aca
              </label>
              <label class="radio">
                <img  width=120 src="http://i0.kym-cdn.com/entries/icons/original/000/005/180/fuckthat.jpg">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Talvez vaya y por el momento quiero conectarme con los demas por aca
              </label>
            </div>
          </div>
          </fieldset>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Guadar</button>
            <button class="btn">Cancelar</button>
          </div>
          </form>
        </div>

      </div>
<?php $this->load->view('footer'); ?>
