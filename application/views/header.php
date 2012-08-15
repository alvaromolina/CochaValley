
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
    </style>
    <link href="<?=base_url();?>css/jquery.tagsinput.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="<?=base_url();?>js/jquery.tagsinput.js"></script>

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
          <a class="brand" href="<?=base_url();?>">Cocha Valley</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?=base_url();?>">Inicio</a></li>
              <li><a href="<?=base_url();?>index/connect">Conectar con participantes</a></li>
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
                      <li><a href="<?=base_url().'index/profile'?>" > Perfil
                      </a></li>
                  </ul>
                </li>
                <li><a href="<?=base_url().'index/logout'?>" style="font-family: 'Oleo Script', cursive; ">Salir</a></li>
            </ul>

                <?php } ?>

            
          </div>
        </div>
      </div>
    </div>

    <div class="container">


    