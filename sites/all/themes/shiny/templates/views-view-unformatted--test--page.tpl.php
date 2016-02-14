<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<h1>Email List</h1>
<?php foreach ($rows as $id => $row): ?>
 
    <?php print $row . ","; ?>

<?php endforeach; ?>
<br><h1>Update List</h1>
<?php foreach ($rows as $id => $row): ?>
 
    <?php print $row . "<br>"; ?>

<?php endforeach; ?>