<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

$c = Page::getCurrentPage();
$u = new User();
$loginURL= $this->url('/login', 'do_login' );

if ($u->isRegistered() && $hideFormUponLogin) { ?>
	<?php
	if (Config::get("ENABLE_USER_PROFILES")) {
		$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
	} else {
		$userName = $u->getUserName();
	}
	?>
	<div class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a class="logout-btn" href="<?php  echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></div>
<?php   } else { ?>
	<form class="login_block_form" method="post" action="<?= $loginURL ?>">
		<?php
			if($returnToSamePage ) {
				echo $form->hidden('rcID',$c->getCollectionID());
			}
		?>

		<div class="loginTitle"><a href="<?= $this->url('/login') ?>">Accès membres</a></div>

		<div class="uNameWrap form-group">
			<?php
				$uNameLabel = USER_REGISTRATION_WITH_EMAIL_ADDRESS ? t('Email Address') : t('Username');
			?>
			<label for="uName"><?= $uNameLabel ?></label>
			<input type="text" name="uName" value="<?= $uName ?>" placeholder="<?= $uNameLabel ?>">
		</div>
		<div class="uNameWrap form-group">
			<?php
				$uNameLabel = USER_REGISTRATION_WITH_EMAIL_ADDRESS ? t('Email Address') : t('Username');
			?>
			<label for="uPassword"><?= t('Password') ?></label>
			<input type="password" name="uPassword" placeholder="<?= t('Password') ?>">
		</div>

		<div class="loginButton form-group">
			<input type="submit" name="submit" value="<?= t('Sign In') ?>">
		</div>

		<?php if($showRegisterLink && ENABLE_REGISTRATION){ ?>
			<div class="login_block_register_link"><a href="<?php echo View::url('/register')?>"><?php echo $registerText?></a></div>
		<?php } ?>

	</form>
<?php  } // end if not logged in  ?>