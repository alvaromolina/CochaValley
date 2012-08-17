
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CochaValley</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
        
        .users { overflow: hidden; margin: 0; padding: 0; list-style: none; }
          .users li { position: relative; overflow: hidden; float: left; width: 220px; margin: 0 20px 20px 0; padding: 10px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; background-color: #F5F5F5; border: 1px solid rgba(0, 0, 0, 0.05); border-radius: 4px; }
            .users li:hover { box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2); }
            .users li:nth-child(4n) { margin-right: 0; }
              .userBox { }
              .userName { overflow: hidden; height: 26px; line-height: 26px; margin: 0 0 6px 0; padding: 0; text-align: center; font-size: 22px; font-weight: bold; } 
              .userPic { overflow: hidden; height: 186px; text-align: center; } 
              .userTags { position: absolute; bottom: 10px; left: 10px; display: none; width: 192px; padding: 4px; background: rgba(0, 0, 0, 0.8); font-size: 11px; color: #FFF; }
              .users li:hover .userTags { display: block; }
    </style>
    <link href="<?=base_url();?>css/jquery.tagsinput.css" rel="stylesheet">
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?=base_url();?>js/jquery.tagsinput.js"></script>
    <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
    function popup(url,name,windowWidth,windowHeight){
    myleft=(screen.width)?(screen.width-windowWidth)/2:100;
    mytop=(screen.height)?(screen.height-windowHeight)/2:100;
    properties = "width="+windowWidth+",height="+windowHeight;
    properties +=",scrollbars=yes, top="+mytop+",left="+myleft;
    window.open(url,name,properties);
    }
    </script>
    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?=base_url();?>event/">Cocha Valley</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?=base_url();?>event/">Inicio</a></li>
              <li><a href="<?=base_url();?>event/connect">Conectar con participantes</a></li>
              <li><a href="<?=base_url();?>event/contact">Contacto</a></li>

            </ul>
                <?php if ($id) { ?>
            <ul class="nav pull-right">
                <li>
                <a href="<?=base_url().'user/profile'?>"><img class="photoroundsmall" width="20" src="https://graph.facebook.com/<?=$fid?>/picture"></a></li>
                <li class="dropdown" style="font-family: 'Oleo Script', cursive;">
                  <a href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown">
                        <?=$name?>
                        <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href=""> Perfil (pronto)
                      </a></li>
                  </ul>
                </li>
                <li><a href="<?=base_url().'event/logout'?>" style="font-family: 'Oleo Script', cursive; ">Salir</a></li>
            </ul>
                <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="container">


    