<?php $this->load->view('header'); ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
  
          <form class="well form-search" method="get">
          <input type="text" name="q" class="input-medium search-query" placeholder="Buscar por intereses">
          <button type="submit" class="btn">Buscar</button>
          </form>
        </div>
      </div>
      <?php $i = 1; ?>
      <?php foreach($users as $user): ?>
        <?php if ($i % 3 == 0): ?>
        <div class="row">
        <?php endif; ?>
          <div class="span2">
              <img src="https://graph.facebook.com/<?php echo $user['fid']; ?>/picture?type=large">
          </div>          
          <div class="span2">
            <h2><?php echo $user['first_name'].' '.$user['last_name']; ?></h2>
          </div>
        <?php if ($i % 3 == 0): ?>
        </div>
        <?php endif; ?>
        <?php $i++; ?>
      <?php endforeach; ?>
<div style="clear: both;"></div>
<?php $this->load->view('footer'); ?>