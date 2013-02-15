<footer id="mastfoot">
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a target="_blank" href="http://twitter.com/ShantiWahyuni">@ShantiWahyuni</a></li>
			<li><a target="_blank" href="http://twitter.com/SubriseSammy">@SubriseSammy</a></li>
			<?php if (Auth::instance()->logged_in()) : ?>
			<li class="pull-right">
				<a href="<?php echo Route::url('default', array('controller' => 'auth', 'action' => 'logout')) ?>">Log Out</a>
			</li>
			<?php endif; ?>
		</ul>
		<p class="muted">Copyright &copy; 2012 <?php if (date('Y', time()) > 2012) echo ' - '.date('Y', time()) ?> <a href="http://subrise.com" target="_blank">Subrise Games</a></p>
	</div><!-- .container -->
</footer><!-- #mastfoot -->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo URL::base() ?>assets/js/bootstrap.min.js"></script>



</body>
</html>