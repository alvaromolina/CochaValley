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
          <img src="http://distilleryimage10.s3.amazonaws.com/776ca014e01711e1900e22000a1e8691_7.jpg">
        </div>

        <div class="span8">
          <h2>Primer evento Cocha Valley  </h2>
          <h3><i class="icon-calendar"></i> 10/08/2012 4:44 PM</h3>
          <h3><i class="icon-map-marker"></i><a href="https://www.facebook.com/Cafevisual" target="_blank">La muelita</a>
          <a href="http://amerpages.com/spa/bolivia/items/view/3712/la-muela-del-diablo-pub-cultural/" target="_blank" style="font-size: x-small; color: grey;">Direcci&oacute;n</a>
          </h3>
          <p>
            Descubre las nuevas oportunidades para startups en Bolivia y el mundo. Conectate con la comunidad mas vibrante  de tecnolog&iacute;a en Cochabamba.  Encuentra a tu pr&oacute;ximo co-founder o simplemente pasa un buen momento.
          </p>
          <div class="modal hide" id="myModal">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h3>Cocha Valley</h3>
            </div>
            <div class="modal-body">
              <p>Descubre las nuevas oportunidades para startups en Bolivia y el mundo. Conectate con la comunidad mas vibrante  de tecnolog&iacute;a en Cochabamba.  Encuentra a tu pr&oacute;ximo co-founder o simplemente pasa un buen momento.
</p>
              <h4>Inscripciones</h4>
                Inscripciones
                Solo se aceptaran a personas que se hayan registrado y confirmado su asistencia a través del portal cochavalley.com

              <h4>Cronograma</h4>
              <p>
                
                4:44 - 5:00 pm: Registro de personas <br>
                5:00 - 5:10 pm: Presentación Cocha Valley <br>
                5:10 - 6:00 pm:  Presentaciones de utilidad para la comunidad <br>
--- Se están definiendo presentaciones de mentores y personas de la comunidad que tiene información o experiencias útiles para compartir 
Si tienes algo útil que compartir con la comunidad favor envía tu tema, descripción de lo que quieres presentar a contact@cochavalley.com 
Serán presentaciones entre 5 y 10 min máximo por persona.
-- <br>
6:00 pm - 7:00 pm: Micrófono abierto para presentar ideas y proyectos. <br>
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

                <p><a href="javascript:popup('<?=$loginUrl;?>','',500,350);" class="fb_login" style="padding-bottom: 0px; color: white;  padding-top: 15px; height: 40px;">
                  <span style="margin-left: 25px; font-size: 17px; ">
                    <strong>Registrate con Facebook</strong>
                  </span>
                  </a>

        </div>
      </div>
      <script>
        $('#myModal').modal();
      </script>


<?php $this->load->view('footer'); ?>
