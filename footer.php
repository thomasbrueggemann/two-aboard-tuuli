    <?php wp_footer(); ?>

    <div class="footer hidden-sm hidden-md hidden-lg">
	    <div class="impressum">
			<a href="/impressum">Impressum</a> | &copy; <?php echo date("Y") ?>
		</div>
	</div>

	<script src="<?php bloginfo("stylesheet_directory"); ?>/js/jquery-2.1.4.min.js"></script>
	<script>
		$(function() {
			$(".menu-toggle").on("click", function() {
				console.log("menu");
				$("#navi").slideToggle();
			});
		});
	</script>
</body>
</html>