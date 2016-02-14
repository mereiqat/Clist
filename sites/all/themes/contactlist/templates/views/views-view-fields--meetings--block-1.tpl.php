<?php 

$nob  = strip_tags($fields["field_users2"]->content);
$nob = explode(" ", $nob);
//echo count($nob);

?>

<div class="meta">
  <h2 class="space-name"><a href="#">Date: <?php print strip_tags($fields["field_date"]->content);?></a></h2>
  <div class="counts"> <span class="contacts"> <i class="icon icon-cog"></i><span class="count"><?php echo count($nob);?></span> Attend the meeting </span> <a target="_blank" class="greenbtn" href="/node/<?php echo strip_tags($fields["nid"]->content);?>" data-ids="<?php echo strip_tags($fields["field_users2"]->content);?>">Show Attendances</a><a id="btndedupe3" class="greenbtn" href="#" data-ids="<?php echo strip_tags($fields["field_users2"]->content);?>">Organizations Chart</a></div>
</div>
