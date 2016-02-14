<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <li id="alphaDividerhash" class="alphaDivider letter-hash clearfix">
              <p id="<?php print $title; ?>" class="divider-letter"><?php print $title; ?></p>
              <ul class="letter-contacts">
              <?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
 
<?php endforeach; ?>
</ul></li>
<?php endif; ?>


