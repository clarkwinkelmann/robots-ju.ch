
	<div id="footer">
		<?php
			$ah = new GlobalArea('Footer');
			$ah->display($c);
		?>
	</div>
</div>
<script src="<?php echo $this->getThemePath()?>/js/our-activities-banner.js"></script>
<?php
	Loader::element('footer_required');
?>
</body>
</html>