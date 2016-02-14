<?php 

?>

<li id="<?php print strip_tags($fields["nid"]->content);?>" data-nid="<?php print strip_tags($fields["nid"]->content);?>" class="single-contact"> <a href="http://clist.ochasyria.org/contactgroup/<?php print strip_tags($fields["nid"]->content);?>" class="contact-avatar"> <img src="http://www.iconshock.com/img_vista/WINDOWS8/general/jpg/group_icon.jpg" /></a>
  <div class="contact-body">
    <div class="check-area"></div>
    <h2 class="contact-name"><a href="http://clist.ochasyria.org/contactgroup/<?php print strip_tags($fields["nid"]->content);?>"> <strong><?php print strip_tags($fields["title"]->content);?></strong> </a></h2>
    <h3 class="current-job" >
      <p id="org"><?php print strip_tags($fields["etid"]->content);?> Members</p>
    </h3>
  </div>
  <div class="labels"><?php print  strip_tags($fields["field_region"]->content);?> </div>
