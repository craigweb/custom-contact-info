<?php
/**
 * @file
 * TPL file for the custom contact information module.
 */
?>

<?php if(!empty($telephone) || !empty($email) || !empty($address)) : ?>
  <ul class="contact-information">

    <?php if(!empty($telephone)) : ?>
      <li class="telephone"><?php print $telephone; ?></li>
    <?php endif; ?>

    <?php if(!empty($email)) : ?>
      <li class="email"><?php print $email; ?></li>
    <?php endif; ?>

    <?php if(!empty($address)) : ?>
      <li class="address"><?php print $address; ?></li>
    <?php endif; ?>

  </ul>
<?php endif; ?>
