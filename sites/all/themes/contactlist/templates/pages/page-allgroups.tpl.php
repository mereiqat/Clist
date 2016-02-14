<?php
global $user;
global $base_url;

?>
<div class="pp">
  <textarea id="exportedList">no contact selected ....</textarea>
  <a href="#" id="closepp"><i class="fa fa-times-circle"></i></a>
</div>

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
<div id="page">
  <ul id="tab-bar">
    
    <li> <a href="<?php echo $base_url;?>/search">Search</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups">All Groups</a> </li>
    
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=520">Jordan Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=514">Regional Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=517">Turkey Groups</a> </li>
    <li> <a href="<?php echo $base_url;?>/allcontactgroups?field_region_tid=515">Syria Groups</a> </li>
	<li class="add-contact"> <a class="btn primary" href="<?php echo $base_url;?>/admin/people/create?destination=contacts"><i class="icon icon-user-add"></i> Add contact</a> </li>  </ul>
   <h1 class="page-title2"><i class="icon icon-users"></i> <?php echo $title;?></h1>
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
            <span data-mode="list" class="btn changeView short_view_btn  active"><i class="view-list icon icon-list-3"></i></span><span data-mode="card" class="btn changeView short_view_btn "><i class="view-card icon icon-card"></i></span><span data-mode="tile" class="btn changeView short_view_btn "><i class="view-tile icon icon-tile"></i></span>
          </div>
        </div>
      </div>
      <span class="vertical-divider"></span>
      <div class="control-group">
        
        <div class="controls" id="sortOrder">
          <div class="ui-widget">
            <label for="tags" style="float:left; display:block">Filter By: </label>
            <input id="regions" placeholder="Region">
            <a class="btn primary" href="<?php echo $base_url.'/'.arg(0)?>"><i class="fa fa-refresh"></i>Reset filters</a>
          </div>
        </div>
      </div>
      
     
      <div class="control-group form-search">
        <label class="control-label" for="searchQuery">Search</label>
        <div class="controls"> </div>
      </div>
    </div>
    <div id="actions" class="tab-bar dark">
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" id="exportgrupsemails"><i class="fa fa-envelope-o"></i> Export selected groups emails</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" id="exportgroupsexls"><i class="fa fa-file-excel-o"></i> Export selected groups XLS</a> </div>
      </div>
      <div class="control-group">
        <div class="controls"> <a class="toggle action-toggle" href="<?php echo $base_url;?>/allgroups2.xls"><i class="fa fa-file-excel-o"></i> Export all groups XLS</a> </div>
      </div>
      
      
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
