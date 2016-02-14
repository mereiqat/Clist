<?php if($is_front ){?>
	<style>#edit-select {
    display: none;
}</style>
	<?php };?>
  <div id="branding" class="clearfix">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $breadcrumb; ?>
    <?php print render($primary_local_tasks); ?>
  </div>

  <div id="page">
    <?php if ($secondary_local_tasks): ?>
      <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <div class="element-invisible"><a id="main-content"></a></div>
      <?php if ($messages): ?>
        <div id="console" class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      <div id="right"> <?php print render($page['content_right']); ?></div><div id="left"><?php print render($page['content_left']); ?></div>
    </div>

    <div id="feed-icons">
      <?php print $feed_icons; ?>
    </div>

  </div>
  <?php if ($page['footer']):?>
    <div id="footer">
      <?php print render($page['footer']);?>
    </div>
  <?php endif;?>
  </div>
  <script>
  function doexport(){
	  var x = 0;
	 // alert("yes");
	  var checkedValues = jQuery('input:checkbox:checked').map(function() {
    if(x == 0){
	x=this.value
	}else{
		x= x + "+" + this.value
		}
}).get();

x="http://clist.ochasyria.org/export_emails/"+x;
window.location.replace(x);

  //alert(x);


	  }
	  function doexport1(){
	  var x = 0;
	 // alert("yes");
	  var checkedValues = jQuery('input:checkbox:checked').map(function() {
    if(x == 0){
	x=this.value
	}else{
		x= x + "+" + this.value
		}
}).get();

x="http://clist.ochasyria.org/export_emails_exls/"+x;
window.location.replace(x);

  //alert(x);


	  }
  </script>