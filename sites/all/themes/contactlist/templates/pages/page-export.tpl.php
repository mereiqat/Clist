<?php
global $user;
global $base_url;
$today = date("F j, Y");
$x=node_load(arg(1));
$title=$x->title
?>
<script>
document.title = "<?php if($node->type == "meeting"){echo "Meeting Attendence";}else{echo $title; }?>";
</script>
<div id="printpdf">
<table style="width: 100%;">
    <tbody><tr>
        <td><h1><?php if($node->type == "meeting"){echo "Meeting Attendence";}else{echo $title; }?></h1><p><?php  if($node->type == "meeting"){echo "";}else{echo $today;} ?></p></td>
        <td style="padding: 0px;"><img src="http://ochasyria.org/ochalogo.jpg" style="width: 35%; float: right;"></td>
    
</tr></tbody></table>
<a href="javascript:window.print()" id="printbtn">Print to PDF</a>
 <?php print render($page['content']); ?>
 <!-- Web2PDF Converter Button BEGIN -->

<!-- Web2PDF Converter Button END -->

</div>
<style>
body{ background:#fff; font-family: "Lucida Grande";
    font-size: 12px;
   }
#printpdf {
      margin: 1%;
    width: 98%;
}
	h1 {
    color: #106dba;
    font-size: 29px;
    line-height: 0;
    margin: 40px 0 0;
}
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
#wrapper {
    bottom: 0;
    display: block;
    left: 0;
    min-width: 980px;
    position: absolute;
    right: 0;
    top: 0;
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
#printpdf > a {
    background: #106dba none repeat scroll 0 0;
    color: #fff;
    float: left;
    margin: 10px;
    padding: 10px;
}
.submitted{display:none}
@media print {
body {-webkit-print-color-adjust: exact;}
.views-exposed-form{display:none}
#printpdf > a {
   display:none
}
}
</style>