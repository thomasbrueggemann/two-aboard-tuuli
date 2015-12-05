<div class="logo circle"></div>
<div class="title">
	<a href="/"><?php bloginfo("name"); ?></a>
</div>
<div class="description"><?php bloginfo("description"); ?></div>

<div class="cover_image" deluminate_imagetype="jpg"></div>

<nav>
	<?php
		wp_nav_menu(array(
			"theme_location" => "main-navi",
			"container" => false,
			"menu_class" => "nav nav-pills nav-stacked",
			"depth" => 1,
			"walker" => new MainMenu_Walker_Nav_Menu
		));
	?>
</nav>

<section class="social">
	<a class="icon-facebook" href="https://www.facebook.com/twoaboardtuuli/" target="_blank" title="Follow on Facebook">
		<i class="fa fa-facebook"></i>
	</a>
	<a class="icon-twitter" href="https://twitter.com/twoaboardtuuli" target="_blank" title="Follow on Twitter">
		<i class="fa fa-twitter"></i>
	</a>
	<a class="icon-youtube" href="https://www.youtube.com/c/two-aboard-tuuli" target="_blank" title="Follow on Youtube">
		<i class="fa fa-youtube"></i>
	</a>
	<a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Ftwo-aboard-tuuli.com/rss" target="blank" class="icon-feedly">
		<img id="feedlyFollow" src="http://s3.feedly.com/img/follows/feedly-follow-circle-flat-green_2x.png" alt="follow us in feedly" width="31" height="31">
	</a>
</section>

<div class="impressum">
	<a href="/impressum">Impressum</a> | &copy; <?php echo date("Y") ?>
</div>