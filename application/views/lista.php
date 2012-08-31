<?php $this->load->view('header'); ?>
      <!-- Example row of columns -->
      
            
<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th>Last Name</th> 
    <th>First Name</th> 
    <th>Email</th>
    <th>Empresa</th> 
    <th>Role</th> 
    <th>Going</th> 
</tr> 
</thead> 
<tbody>
      <?php foreach($users as $user): ?>
<tr>
    <td><?=$user['last_name']?></td> 
    <td><?=$user['first_name']?></td> 
    <td><?=$user['email']?></td>
    <td><?=isset($user['company'])?$user['company']:""?></td> 
    <td><? isset($user['role'])?var_dump($user['role']):""?></td> 
    <td><?=isset($user['going'])?$user['going']:""?></td> 
</tr> 
      <?php endforeach; ?>  
</tbody> 
</table>
<?php $this->load->view('footer'); ?>