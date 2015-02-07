<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="page"><div id="page-content">
<div id="ccm-profile-wrapper">
	<h1><?php echo $c->getCollectionName(); ?></h1>
	
	<form method="get" action="<?php echo DIR_REL?>/<?php echo DISPATCHER_FILENAME?>" class="form-search-members">
			<input type="hidden" name="cID" value="<?php echo $c->getCollectionID()?>" />
			<input name="keywords" type="text" value="<?php echo $keywords?>" size="20" placeholder="<?php echo t('Search');?>" />
			<input name="submit" type="submit" value="<?php echo t('Search')?>" />
	</form>
	
	<?php if ($userList->getTotal() == 0) { ?>
	
		<div><?php echo t('No users found.')?></div>
	
	<?php } else { ?>
	
		<div class="ccm-profile-member-list">
		<?php  
		$av = Loader::helper('concrete/avatar');
		$u = new User();
		
		foreach($users as $user) {
			
			$rawgroups = $user->getUserGroups();
			
			$groups = array();
			
			if(!is_null($rawgroups)){
				foreach($rawgroups as $groupname){
					$groups[] = $groupname;
				}
			}
		
			?>				
			<div class="ccm-profile-member">
				<a href="<?php echo $this->url('/profile','view', $user->getUserID())?>">
					<div class="avatar"><?php echo $av->outputUserAvatar($user)?></div>
					<div class="profile">
						<div class="name"><?php echo $user->getAttribute('profile_firstname', 'displaySanitized', 'display').' '.$user->getAttribute('profile_name', 'displaySanitized', 'display'); ?></div>
						<div class="groups"><?php echo implode($groups, ', '); ?></div>
					</div>
				</a>
			</div>	
		
		
	
	<?php } ?>
		
		</div>
		
		<?php echo $userList->displayPagingV2()?>
		
	<?php 
	
	} ?>
</div>
</div><div id="page-sidebar">
		<?php
			$a = new Area('Sidebar');
			$a->display($c);
		?>
		<?php
			$a = new GlobalArea('Global Sidebar');
			$a->display($c);
		?>
</div></div>