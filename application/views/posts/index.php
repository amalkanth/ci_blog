
this is index
<?php foreach($posts as $post):?>
<h3><?php echo $post['title'];?></h3>
<small class="post-date">posted on:
 <?php  echo $post['created_at'];?> </small><br>
<?php echo $post['body'];?>
<?php  endforeach;?>




