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
      <div class="row hero-unit" style="background-color: white;">
        <div class="span4">
          <img src="<?=base_url()?>img/CochaValleyLogo.png">
        </div>
        <div class="span6">
          <p style="text-align: justify;">
<strong>Cocha Valley</strong> es un grupo de personas que creemos en el desarrollo de nuestro pa&iacute;s a trav&eacute;s de la tecnolog&iacute;a.
Tenemos sede en la ciudad de Cochabamba,pero estamos abiertos al mundo entero. Nacio del <a href="http://cochabamba.startupweekend.org/" target="_blank">
  Startup Weekend.
</a>
Aun estamos en construcci&oacute;n, pero crecemos <a href="<?base_url()?>event">dia a dia.</a><br>
Puedes ver nuestras noticias <a href="<?base_url()?>/news">aca</a>. 
O en <a href="https://twitter.com/CochaValley" target="_blank">twitter</a>. 
Y en nuestro grupo en <a href="https://www.facebook.com/groups/240867712700407/" target="_blank">Facebook</a>.
          </p>
                <?php if (!$id) { ?>
                <p>Registrate ser parte de la comunidad</p>
                <a href="javascript:popup('<?=$loginUrl;?>','',500,350);" class="fb_login" style="padding-bottom: 0px; color: white;  padding-top: 15px; height: 40px;">
                  <span style="margin-left: 25px; font-size: 17px; ">
                    <strong>Registrate con Facebook</strong>
                  </span>
                  </a>
                <? } ?>

        </div>
      </div>


<?php $this->load->view('footer'); ?>
