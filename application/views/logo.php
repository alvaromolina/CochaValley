<?php $this->load->view('header'); ?>



      <div class="row">
      <? $cont = 0; ?>
      <?php foreach($logos as $logo): ?>
        <div class="span5 well" style="text-align: center;"  >
          <img src="<?=base_url()."img/".$logo['logo']?>">
          <BR>
          <BR>
            
          <? if (isset($id) and in_array($id,$logo['users'] )) {?>
          
          <input type="hidden" name="voted" id="voted" value="<?=$logo['_id']?>">
          <? } ?>
          <div id="info<?=$logo['_id']?>" <?=(isset($id) and in_array($id,$logo['users']))? 'class="alert alert-success" ' :'style="display: none;"' ?>  >
            <?=(isset($id) and in_array($id,$logo['users']))? 'Ya voto por este logo.' :'' ?>
          </div>
          <button id="<?=$logo['_id']?>" type="button" <?=(isset($id) and in_array($id,$logo['users']))? ' style="display: none; margin-left: auto; margin-right: auto; margin-top: 10px;" ' :'style="display: block; margin-left: auto; margin-right: auto; margin-top: 10px;"'?> class="btn btn-success">Votar</button>
          
          <br>
          Votos <strong id="numvotes<?=$logo['_id']?>">(<?=$logo['votes']?>)</strong>
        </div>
        
      <?
      
      $cont++;
      
      if($cont==2){
        $cont = 0;
        echo ' </div><div class="row">';
      }
      ?>
      <?php endforeach; ?>

      
      </div>
<div class="modal span2" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

  <div class="modal-body" style="text-align: center;">
    <p><img src="<?=base_url()?>img/ajax-loader.gif"></p>
  </div>

</div>
      
      
      <script>
  $("button").click(function() {
  var id = $(this).attr('id');
  $('#myModal').modal('show');
  $.get('vote/'+$(this).attr('id'), function(data) {
    
    data = JSON.parse(data);
    if(data.result=='nolog'){
      window.location.href="<?=base_url()?>index/login";
    }else if( data.result=='ok'){
      $('#info'+id).show();
      $('#info'+id).html('Se registro tu voto. Gracias!');
      $('#info'+id).addClass('alert');
      $('#info'+id).addClass('alert-success');
      $('#info'+id).removeClass('alert-error');
      $('#'+id).hide();
      if(data.oldvotes>=0){
        $('#info'+$('#voted').val()).hide();
        $('#'+$('#voted').val()).show();
        $('#numvotes'+$('#voted').val()).html("("+data.oldvotes+")");
      }
      $('#numvotes'+id).html("("+data.votes+")");
      $('#voted').val(id);

    }else{
      $('#info'+id).show();
      $('#info'+id).addClass('alert');
      $('#info'+id).addClass('alert-error');
      $('#info'+id).removeClass('alert-success');
      $('#info'+id).html(data.result);

    }
    $('#myModal').modal('hide');

  });
  
});
      </script>
      
<?php $this->load->view('footer'); ?>
