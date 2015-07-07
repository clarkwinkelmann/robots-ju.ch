<!doctype html>
<html>
<head>
	<?php 
		Loader::element('header_required');
	?>
	
	<link href='//fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!--[if lte IE 8]>
	<div id="ienotice">Votre version d'Internet Explorer est obsolète. Mettez votre navigateur à jour pour bénéficier d'un affichage correct de ce site.<br>
	Consultez <a href="http://browsehappy.com/?locale=fr" target="_blank">BrowseHappy.com</a> pour plus d'informations sur les navigateurs internet</div>
	<![endif]-->
	<div id="container">
		<div id="header">
			<div id="header-banner">
				<div class="logo">
					<?php
						$ah = new GlobalArea('Logo');
						$ah->display($c);
					?>
				</div>
				<div class="motto">
					<?php
						$ah = new GlobalArea('Motto');
						$ah->display($c);
					?>
				</div>
				<div class="login">
					<?php
						$ah = new GlobalArea('Login Box');
						$ah->display($c);
					?>
				</div>
				<?php
					$ah = new GlobalArea('Header Raw');
					$ah->display($c);
				?>
			</div>
			<div class="menu-toggle-button js-menu-toggle-button"><span class="text">Menu</span></div>
			<div class="menu-toggle-group js-menu-toggle-group">
				<div id="header-menu">
					<?php
						$ah = new GlobalArea('Header Nav');
						$ah->display($c);
					?>
				</div>
				<?php $u = new User();
				if ($u->isRegistered()) { ?>
				<div id="header-user-menu">
					<?php
						$ah = new GlobalArea('Header User Nav');
						$ah->display($c);
					?>
				</div>
				<?php } ?>
			</div>
			<script type="text/javascript">
				$('.js-menu-toggle-group').addClass('js-enabled');

				$('.js-menu-toggle-button').click(function() {
					$('.js-menu-toggle-group').toggleClass('visible');
				});
			</script>
		</div>
