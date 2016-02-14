<?php $myvalue = strip_tags($fields["field_full_name"]->content);
$arr = explode(' ',trim($myvalue));
$firt=$arr[0];
$full='';
$myvalue = str_replace($firt, '', $myvalue);


?>
<li id="<?php print strip_tags($fields["uid"]->content);?>" data-lvl="<?php print strip_tags($fields["field_user_level"]->content);?>" data-orga="<?php print strip_tags($fields["field_organisation"]->content);?>" data-email="<?php print strip_tags($fields["field_email"]->content);?>" class="single-contact"> <a href="<?php print strip_tags($fields["url"]->content);?>" class="contact-avatar"> <img src="http://lutz.donnerhacke.de/extension/ezdemo/design/ezdemo/images/user.gif" /></a>
  <div class="contact-body">
  <div class="edit_user"><a href="http://clist.ochasyria.org/group/node/<?php echo arg(1);?>/admin/people/edit-membership/<?php print strip_tags($fields["id"]->content);?>?destination=contactgroup/<?php echo arg(1);?>"><i class="fa fa-pencil-square-o"></i></a></div>
    <div class="check-area"></div>
    <h2 class="contact-name"><a href="<?php print strip_tags($fields["url"]->content);?>"> <strong><?php echo $firt;?></strong><?php echo $myvalue;?> </a></h2>
    <h3 class="current-job" ><p id="org"><?php print strip_tags($fields["field_organisation"]->content);?></p><?php if(strip_tags($fields["field_sector"]->content) !=""){?>  | <?php print $fields["field_sector"]->content;?><?php }else{echo '<p id="secto"></p>';} ?></h3>  
  </div>
  <div class="labels"><?php print $fields["og_group_ref"]->content;?> </div>

