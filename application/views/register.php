
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
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
          <a class="brand" href="#">Cocha Valley</a>
          <!--
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
          
        </div>
      </div>
    </div>

    <div class="container">


      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <img src="http://www.strangebeaver.com/wp-content/uploads/2011/01/fb/1.jpg">
          <p><a class="btn" href="#">Subir foto </a></p>
  
        </div>
        <div class="span8">
          <form class="well" action="<?=base_url();?>">
            <label>Nombre</label>
            <input type="text" class="span3" placeholder="...">
            <label>Apellidos</label>
            <input type="text" class="span3" placeholder="...">
            <label>Email</label>
            <input type="text" class="span3" placeholder="...">
            <label>Intereses</label>
            <input type="text" class="span3" placeholder="...">
            <label>dsdsd</label>
            <input type="text" class="span3" placeholder="...">
            <label class="radio">
            </label>
            
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
            
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>

      </div>

      <hr>

      <footer>
        <p>&copy; CochaValley 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>