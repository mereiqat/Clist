<?php
global $user;
global $base_url;

//if($user->uid==0){
	//drupal_goto('user/login');
	//}

/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="pp">
  <textarea id="exportedList">no contact selected ....</textarea>
  <a href="#" id="closepp"><i class="fa fa-times-circle"></i></a> </div>
<div id="topbar">
  <ul>
    <!-- CZ Logo -->
    <li>
      <div id="table-logo"> <a href="../" id="contactzilla-logo"><img src="<?php echo $base_url .'/'. path_to_theme().'/'?>images/logo-header.png" alt="contact list logo" /></a> </div>
    </li>
    
    <!-- Current user -->
    <li>
      <div class="media">
        <div class="media__body">
          <h4 class="media-heading"> <?php echo $user->name;?> &#9662; </h4>
        </div>
        <div class="media__dropdown"> <a href="#"><i class="icon icon-help"></i> Support</a> <a href="#"><i class="icon icon-cog"></i> Settings</a> <a href="#"><i class="icon icon-list"></i> Team Members</a> <a href="http://clist.ochasyria.org/user/logout"><i class="icon icon-logout"></i> Logout</a> </div>
        <a class="media__image"> <img class="media-object" src="http://lutz.donnerhacke.de/extension/ezdemo/design/ezdemo/images/user.gif" alt="ocha"> </a> </div>
    </li>
  </ul>
</div>
<div id="page" style=" position: relative;">
  <ul id="tab-bar">
    
   <li> <a href="<?php echo $base_url;?>/search">Search</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups">All Groups</a> </li>
    
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=520">Jordan Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=514">Regional Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=517">Turkey Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=515">Syria Groups</a> </li>
    <li class="add-contact"> <a class="btn primary" href="<?php echo $base_url;?>/admin/people/create?destination=contacts"><i class="icon icon-user-add"></i> Add contact</a> </li>
  </ul>
  <h1 class="page-title2"><i class="icon icon-users"></i> <?php echo $title;?></h1>
  <div class="page-content">
    
    <?php print $messages; ?>
    <?php if(arg(0)=='user' & !arg(2)){?><a href="<?php echo arg(1)?>/edit/user_profile" class="greenbtn">Edit User</a><?php } ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
        <?php print render($page['content']); ?>
      
  </div>
</div>

<?php if(arg(2)=='meeting'){?>
	<script type="text/javascript">
    jQuery(document).ready(function(e) {
	   
       jQuery("input#edit-title").attr('val',$("#edit-og-group-ref-und-0-default option:selected" ).html())
	   jQuery("input#edit-title").attr('value',$("#edit-og-group-ref-und-0-default option:selected" ).html())
	   //jQuery("input#edit-title").prop('disabled', true);
    });
    </script>
	
	<?php }?>
    <style>


table {
    border-collapse: separate;
}
.view.view-allcontacts {
    margin-top: 0px;
}
thead {
    background: #106dba none repeat scroll 0 0;
    color: #fff;
}
thead a{color:#fff;}
th {
    border-bottom: 3px solid #ccc;
    font-size: 15px;
    padding: 1em;
    text-align: left;
    text-transform: uppercase;
}
tr.even {
    background-color: #fff;
    
}
.views-field.views-field-nothing {
      font-size: 45px;
    padding: 0 10px;
}
td {
    font-size: 14px;
    padding: 10px 15px;
}
.views-field.views-field-field-phone-no- {
    width: 150px;
}
td.active {
    background-color: inherit!important
}
.views-field.views-field-field-job-title {
    width: 20%;
}

thead {display: table-header-group;}
caption {
    font-size: 24px;
    margin-bottom: 10px;
    margin-top: 79px;
    padding: 10px;
    text-align: left;
}
.views-exposed-form{margin:10px}

.submitted{display:none}
@media print {
body {-webkit-print-color-adjust: exact;}
.views-exposed-form{display:none}
#printpdf > a {
   display:none
}
}
</style>

