 <?php global $base_url; ?>
 
 <div class="biglogo"><img src="<?php echo $base_url .'/'. path_to_theme(). '/'?>images/UNOCHA.jpg" ><br><br><?php print $messages; ?></div>
   
     
      <?php print render($page['help']); ?>
 <?php print render($page['content']); ?>