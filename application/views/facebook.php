<html>
  
  <head>
    <script type="text/javascript">
    function popup(url,name,windowWidth,windowHeight){
    myleft=(screen.width)?(screen.width-windowWidth)/2:100;
    mytop=(screen.height)?(screen.height-windowHeight)/2:100;
    properties = "width="+windowWidth+",height="+windowHeight;
    properties +=",scrollbars=yes, top="+mytop+",left="+myleft;
    window.open(url,name,properties);
    }
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  </head>
  <body>
    
    
                <a href="<?=$googleloginurl?>" style="font-family: 'Oleo Script', cursive; margin-top: 10px;">Login with google</a>
		<?php if (!$id) { ?>
                  <a href="javascript:popup('<?=$loginUrl;?>','',500,350);">
                  <span>
                    <strong>Ingresar con Facebook</strong>
                  </span>
                  </a>
                <?php }else { ?>
                <a href="<?=base_url().'user/profile'?>" style="margin-top: 4px;"><img class="photoroundsmall" width="30" src="https://graph.facebook.com/<?=$fid?>/picture"></a>
                <a href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown">
                        <?=$name?>
                        <b class="caret"></b>
                </a>
		
		                        <?=$email?>



                <a href="<?=base_url().'index/logout'?>" style="font-family: 'Oleo Script', cursive; margin-top: 10px;">Salir</a>

                <?php } ?>
		
		
  </body>
</html>

