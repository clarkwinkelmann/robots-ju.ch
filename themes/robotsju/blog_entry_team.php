<?php
	$this->inc('elements/header.php');
?>

<div id="page"><!--
	--><div id="page-content">
		<h1 class="post-title"><?php echo $c->getCollectionName(); ?></h1>
		<?php
			$vo = $c->getVersionObject();
			if (is_object($vo)) {
		?>
		<div class="post-date">
			<?php echo t(
				'Posté par %1$s le %2$s à %3$s',
				$vo->getVersionAuthorUserName(),
				$c->getCollectionDatePublic(DATE_APP_GENERIC_MDY_FULL),
				$c->getCollectionDatePublic(DATE_APP_GENERIC_T)
			); ?>
		</div>
		<?php } ?>
		<div class="post-tags">
			<?php
				$a = new Area('Blog Tags');
				$a->display($c);
			?>
		</div>
		<div class="post-content">
			<?php
				$a = new Area('Main');
				$a->display($c);
			?>
		</div>
		<div class="post-comments">
			<?php
				$a = new Area('Blog Comments');
				$a->display($c);
			?>
		</div>
	</div><!--
	--><div id="page-sidebar">
		<?php
			$a = new GlobalArea('Global Sidebar');
			$a->display($c);
		?>
		<?php
			$a = new Area('Sidebar');
			$a->display($c);
		?>
	</div><!--
--></div>
	
<?php
	$this->inc('elements/footer.php');
?>