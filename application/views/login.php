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
<div class="hero-unit">
  <h1>Cocha Valley Private Area</h1>
  <p>Para poder conectarte con los participantes registrate</p> <br>
  <p>
  <a href="javascript:popup('<?=$loginUrl;?>','',500,350);" class="fb_login" style="padding-bottom: 0px; color: white;  padding-top: 12px; height: 40px;">
    <span style="margin-left: 25px; font-size: 17px; ">
      <strong>Registrate con Facebook</strong>
    </span>
  </a>
  </p>
</div>
<?php $this->load->view('footer'); ?>
