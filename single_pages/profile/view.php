<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="page">
	<div id="page-sidebar">
	<?php Loader::element('profile/sidebar', array('profile'=> $profile)); ?>
	</div><div id="page-content">
	<h1><?php echo $c->getCollectionName(); ?></h1>
    <div id="ccm-profile-body">	
    	<div id="ccm-profile-body-attributes">
    	<div class="ccm-profile-body-item">
    	
        <h2><?php echo $profile->getUserName()?></h2>
        <?php
        $uaks = UserAttributeKey::getPublicProfileList();
        foreach($uaks as $ua) { ?>
            <div>
                <label><?php echo $ua->getAttributeKeyDisplayName()?></label>
                <?php echo $profile->getAttribute($ua, 'displaySanitized', 'display'); ?>
            </div>
        <?php } ?>		
        
        </div>

		</div>
		
		<?php 
			$a = new Area('Main'); 
			$a->setAttribute('profile', $profile); 
			$a->setBlockWrapperStart('<div class="ccm-profile-body-item">');
			$a->setBlockWrapperEnd('</div>');
			$a->display($c); 
		?>
		
    </div>
	
	<div class="ccm-spacer"></div>
	</div>
</div>