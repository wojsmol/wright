<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div class="bannergroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) : ?>
	<h3><?php echo $headerText ?></h3>
<?php endif;

foreach($list as $item) :

	?><div class="banneritem"><?php
	echo modBannersHelper::renderBanner($params, $item);
	?><div class="clr"></div>
	</div>
<?php endforeach; ?>

<?php if ($footerText) : ?>
	<div class="bannerfooter">
		 <?php echo $footerText ?>
	</div>
<?php endif; ?>
</div>