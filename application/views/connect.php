<?php $this->load->view('header'); ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
  
          <form class="well form-search" method="get">
          <input type="text" name="kw" class="input-medium search-query" placeholder="Buscar por intereses" value="<?php echo $keyword; ?>">
          <button type="submit" class="btn">Buscar</button>
          </form>
        </div>
      </div>
      <ul class="users">
      <?php foreach($users as $user): ?>
        <li>
          <div class="userBox">
            <h2 class="userName"><?php echo $user['first_name'].' '.$user['last_name']; ?></h2>
            <div class="userPic"><img src="https://graph.facebook.com/<?php echo $user['fid']; ?>/picture?type=large"></div>
          <?php if (!empty($user['tags'])): ?>
            <div class="userTags"><?php echo $user['tags']; ?></div>
          <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
      </ul>
<div style="clear: both;"></div>
<?php $this->load->view('footer'); ?>