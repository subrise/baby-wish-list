<?php echo View::factory('fragment/header') ?>



<div id="wrap">
	<div id="masthead" class="jumbotron">
		<div class="container">
			<h1>Check Your Email</h1>
		</div><!-- .container -->
	</div><!-- #masthead.jumbotron -->

	<div class="container feedback">
		<p>
			We have sent you an email with a link which will help you sign into the website.
		</p>
		<?php if (isset($allowed_friend) && !$allowed_friend) : ?>
		<p>
			Your account will be reviewed by us before you will gain access to reserve an item
			on the wishlist.
		</p>
		<?php endif; ?>
		<p><a href="<?php echo Route::url('default') ?>">Back</a></p>
	</div><!-- .container feedback -->

	<div id="push"></div><!-- #push -->
</div><!-- #wrap -->



<?php echo View::factory('fragment/footer') ?>