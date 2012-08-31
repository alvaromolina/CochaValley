<?php $this->load->view('header'); ?>
      <style>
        .fb_login {
display: block;
width: 285px;
background: url(<?=base_url();?>img/facebook-login.png) no-repeat top;
color: white;
font-size: small;
text-align: center;
}
      </style>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <img src="<?=base_url()?>img/cochaValleyEvent.png">
        </div>

        <div class="span8">
          <h2>Primer evento Cocha Valley  </h2>
          <h3><i class="icon-calendar"></i> 18/08/2012 4:44 PM</h3>
          <h3><i class="icon-map-marker"></i><a href="https://www.facebook.com/Cafevisual" target="_blank">La Muelita</a>
          <a href="http://amerpages.com/spa/bolivia/items/view/3712/la-muela-del-diablo-pub-cultural/" target="_blank" style="font-size: x-small; color: grey;">Direcci&oacute;n</a>
          </h3>
          <p>
            Descubre las nuevas oportunidades para startups en Bolivia y el mundo. Conectate con la comunidad mas vibrante de tecnolog&iacute;a en Cochabamba.  Encuentra a tu pr&oacute;ximo co-founder o simplemente pasa un buen momento.
          </p>
          <div class="modal hide" id="myModal">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h3>Cocha Valley</h3>
            </div>
            <div class="modal-body">
              <p>
Ven a la primera reuni&oacute;n de Cocha Valley. Tendremos exposiciones &uacute;tiles para todos aquellos interesados en StartUps. Se hablara de CochaValley y como puedes ser parte de el. Tambi&eacute;n veremos proyectos de personas de la comunidad y tendr&aacute;s un espacio para hablar de tus ideas o proyectos. Con&eacute;ctate con otras personas y empecemos a construir la comunidad tecnol&oacute;gica mas importante del pa&iacute;s.              </p>
              <h4>Inscripciones</h4>
                Solo se aceptaran a personas que se hayan registrado y confirmado su asistencia a trav&eacute;s del portal <a href="http://cochavalley.com/event">cochavalley.com/event</a>
              <h4>Cronograma</h4>
              <p>
                
                4:44 - 5:00 pm: Registro de personas <br>
                5:00 - 5:10 pm: Presentaci&oacute;n Cocha Valley <br>
                5:10 - 6:00 pm:  Presentaciones de utilidad para la comunidad <br>
--Se tendr&aacute;n presentaciones de mentores y personas de la comunidad con informaci&oacute;n o experiencias &uacute;tiles para compartir.
Si tu tienes algo &uacute;til que compartir con la comunidad favor env&iacute;a una descripci&oacute;n de lo que quieres presentar a <a href="mailto:contact@cochavalley.com">contact@cochavalley.com</a>
Ser&aacute;n presentaciones entre 5 y 10 min m&aacute;ximo por persona.
-- <br>
6:00 pm - 7:00 pm: Micr&oacute;fono abierto para presentar ideas y proyectos. <br>
-- Utilizar este espacio para que cualquier idea que deseen compartir. 
1 a 3 min por persona - <br>
7:00 pm - Para adelante Networking y chelas! (o lo que quieras) <br>
</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
          </div>
<a class="btn btn-info" data-toggle="modal" href="#myModal" >Ver mas detalles >></a>
                <br>
                <br>
  
                <div class="alert alert-success">
                  Este evento ya sucedio. Si no pudiste participar pronto se realizaran nuevos eventos.
                </div>
        </div>
      </div>
      <div class="row">
        <div class="span5 well">
          <img src="<?=base_url()?>img/evento_1_1.jpeg">
        </div>
        <div class="span5 well">
          <img src="<?=base_url()?>img/evento_1_2.jpeg">
        </div>
      </div>
      <div class="row">
        <div class="span5 well">
          <img src="<?=base_url()?>img/evento_1_3.jpeg">
        </div>
        <div class="span5 well">
          <img src="<?=base_url()?>img/evento_1_4.jpeg">
        </div>
      </div>
      <script>
        $('#myModal').modal();
      </script>


<?php $this->load->view('footer'); ?>
