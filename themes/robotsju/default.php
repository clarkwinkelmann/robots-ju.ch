<?php
	$this->inc('elements/header.php');
?>

<div id="page"><!--
	--><div id="page-content">
		<h1><?php echo $c->getCollectionName(); ?></h1>
		<?php
			$a = new Area('Main');
			$a->display($c);
		?>
	</div><!--
	--><div id="page-sidebar">
		<?php
			$a = new Area('Sidebar');
			$a->display($c);
		?>
		<?php
			$a = new GlobalArea('Global Sidebar');
			$a->display($c);
		?>
	</div><!--
--></div>
	
<?php
	$this->inc('elements/footer.php');
?>