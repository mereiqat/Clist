<?php
global $user;
global $base_url;
if($node->type == "page"){
	if(arg(2) == ""){
		$url="contactgroup/".arg(1);
		drupal_goto($url);
		}
	}
if(arg(0)=='contactgroupxls' || $node->type == "meeting"){
	include('page-export.tpl.php');
	return;
	}
if(arg(1)=='login'){
	include('page-login.tpl.php');
	return;
	}
	if(arg(0)=='allcontactgroups'){
	include('page-allgroups.tpl.php');
	return;
	}
	if(arg(0)=='contactgroup'){
		$x=node_load(arg(1));
		$title=$x->title;
		}
		
		if(arg(0)!='contacts' && arg(0)!='contactgroup'){
			include('page-others.tpl.php');
	return;
				}
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
        <div class="media__dropdown"> <a href="mailto:elgebely@un.org"><i class="icon icon-help"></i> Support</a> <a href="http://clist.ochasyria.org/admin"><i class="icon icon-cog"></i> Settings</a> <a href="http://clist.ochasyria.org/user/logout"><i class="icon icon-logout"></i> Logout</a> </div>
        <a class="media__image"> <img class="media-object" src="http://lutz.donnerhacke.de/extension/ezdemo/design/ezdemo/images/user.gif" alt="ocha"> </a> </div>
    </li>
  </ul>
</div>
<?php if(arg(0) =='contactgroup'){?>
<div id="sidebar" style="display:none">
  <h3>
  Meetings
  </h2>
  <div id="active-space">
    <div style="background: rgb(51, 51, 51) none repeat scroll 0% 0%; margin-bottom: 14px;" class="meta"> <br>
      <div class="counts"> <a  href="#" class="greenbtn" id="btndedupe4" style="width: 89% ! important; background: #7C0C0E none repeat scroll 0% 0%; box-shadow: 0px 1px 0px rgb(0, 0, 0) inset, 0px 1px 0px rgba(255, 255, 255, 0.15); border-color:#7C0C0E!important;">Full Report</a></div>
    </div>
    <?php print render($page['highlighted']); ?> </div>
</div>
<?php }?>
<div id="page" data-nid="<?php echo arg(1)?>">
  <ul id="tab-bar">
    <li> <a href="<?php echo $base_url;?>/search">Search</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups">All Groups</a> </li>
    
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=520">Jordan Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=514">Regional Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=517">Turkey Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=515">Syria Groups</a> </li>
   
    <li class="add-contact"> <a class="btn primary" href="<?php echo $base_url;?>/admin/people/create?destination=contacts"><i class="icon icon-user-add"></i> Add contact</a> </li>
  </ul>
  <h1 class="page-title2"><i class="icon icon-users"></i> <?php echo $title;?>
    <?php if(arg(0) =='contactgroup'){?>
    | <a href="#" id="showmeetings">See Meetings</a>
    <?php } ?>
  </h1>
  <div class="control-group" style="position: absolute; top: 62px; right: 0px; text-align: right; width: 73%;">
    <div class="controls" id="selectedvalue" style="width:100%"></div>
  </div>
  <div id="main-content">
    <div class="batchControls" id="filters">
      <div class="control-group">
        <label class="control-label" for="display">Display Mode</label>
        <div class="controls">
          <div class="btn-group sort view-switcher" data-toggle="buttons-radio">
            <select id="display" name="display" style="display:none">
              <option value="list" selected="true">List View</option>
              <option value="card" >Card View</option>
              <option value="tile" >Tile View</option>
            </select>
            <span data-mode="list" class="btn changeView short_view_btn  active"><i class="view-list icon icon-list-3"></i></span><span data-mode="card" class="btn changeView short_view_btn "><i class="view-card icon icon-card"></i></span><span data-mode="tile" class="btn changeView short_view_btn "><i class="view-tile icon icon-tile"></i></span> </div>
        </div>
      </div>
      <span class="vertical-divider"></span>
      <div class="control-group">
        <div class="controls" id="sortOrder">
          <div class="ui-widget">
            <label for="tags" style="float:left; display:block">Filter By: </label>
            <select id="tags" title="Organization" class="doitbaby">
              <option selected>Organization</option>
            </select>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls" id="sortOrder">
          <div class="ui-widget">
            <select id="sectorsinput" title="Sectors" class="doitbaby2">
              <option selected>Sectors</option>
            </select>
          </div>
        </div>
      </div>
      <div class="control-group form-search" >
        <label class="control-label" for="searchQuery">Search</label>
        <div class="controls"> </div>
      </div>
    </div>
    <div id="actions" class="tab-bar dark">
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" id="exportemails"><i class="fa fa-envelope-o"></i> Export emails to send</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" id="exportupdate"><i class="fa fa-list-ol"></i> Export update list</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" id="exportselectedxls" ><i class="fa fa-file-excel-o"></i> Export Selected to XLS</a> </div>
      </div>
      <?php if(arg(0)=="contactgroup"){?>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="<?php echo $base_url;?>/group/node/<?php echo arg(1);?>/admin/people/add-user?destination=contactgroup/<?php echo arg(1);?>" ><i class="fa fa-user-plus"></i>Add People</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="<?php echo $base_url;?>/export_emails_exls/<?php echo arg(1);?>" ><i class="fa fa-file-excel-o"></i> Export to XLS</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="<?php echo $base_url;?>/group/node/<?php echo arg(1);?>/admin/people" ><i class="fa fa-pencil-square-o"></i> Edit group members</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="#" id="addtomeeting" ><i class="fa fa-user-plus"></i>Add Selected to a New Meeting</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="#" id="editmember" ><i class="fa fa-pencil-square-o"></i>Edit members</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="<?php echo $base_url;?>/contactgroupxls/<?php echo arg(1);?>?field_mail_category_value=All" target="_blank" ><i class="fa fa-table"></i>Table View</a> </div>
      </div>
      <?php } ?>
      <div id="selectedStatus" data-selectedcount="0" data-totalcount="739"> <span>0 of 739 selected</span> <img id="selectAll" src="<?php echo $base_url.'/'. path_to_theme().'/'?>images/ui/checkbox.png"> </div>
    </div>
    <div id="glossary-nav2">
      <ul>
        <li><a href="#">All</a></li>
        <li><a  data-href="#alphaDivider_dirty" href="#%23" id="link-alphaDivider_dirty">#</a></li>
        <li><a  href="#A">A</a></li>
        <li><a  href="#B" id="link-alphaDividerB">B</a></li>
        <li><a  href="#C" id="link-alphaDividerC">C</a></li>
        <li><a  href="#D" id="link-alphaDividerD">D</a></li>
        <li><a  href="#E" id="link-alphaDividerE">E</a></li>
        <li><a  href="#F" id="link-alphaDividerF">F</a></li>
        <li><a  href="#G" id="link-alphaDividerG">G</a></li>
        <li><a  href="#H" id="link-alphaDividerH">H</a></li>
        <li><a  href="#I" id="link-alphaDividerI">I</a></li>
        <li><a  href="#J" id="link-alphaDividerJ">J</a></li>
        <li><a  href="contacts#K" id="link-alphaDividerK">K</a></li>
        <li><a  href="#L" id="link-alphaDividerL">L</a></li>
        <li><a  href="#M" id="link-alphaDividerM">M</a></li>
        <li><a data-href="#b" href="#N" id="link-alphaDividerN">N</a></li>
        <li><a data-href="#o" href="#O" id="link-alphaDividerO">O</a></li>
        <li><a data-href="#p" href="#P" id="link-alphaDividerP">P</a></li>
        <li><a data-href="#q" href="#Q" id="link-alphaDividerQ">Q</a></li>
        <li><a data-href="#r" href="#R" id="link-alphaDividerR">R</a></li>
        <li><a data-href="#s" href="#S" id="link-alphaDividerS">S</a></li>
        <li><a data-href="#t" href="#T" id="link-alphaDividerT">T</a></li>
        <li><a data-href="#u" href="#U" id="link-alphaDividerU">U</a></li>
        <li><a data-href="#v" href="#V" id="link-alphaDividerV">V</a></li>
        <li><a data-href="#w" href="#W" id="link-alphaDividerW">W</a></li>
        <li><a data-href="#x" href="#X" id="link-alphaDividerX">X</a></li>
        <li><a data-href="#y" href="#Y" id="link-alphaDividerY">Y</a></li>
        <li><a data-href="#x" href="#Z" id="link-alphaDividerZ">Z</a></li>
      </ul>
    </div>
    <div id="contactsCanvas">
      <ul id="contacts" class="contacts-view list">
        <?php print render($page['content']); ?>
      </ul>
    </div>
  </div>
  <div id="black">
    <div id="chartdiv"></div>
    <a href="#" id="closepp"><i class="fa fa-times-circle"></i></a></div>
</div>
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
