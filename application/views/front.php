<?php echo View::factory('fragment/header') ?>



<div id="wrap">
	<div id="masthead" class="jumbotron">
		<div class="container">
			<h1>Stuff Our Baby Needs</h1>
			<p>
				Hello, we created this virtual list to show you what our baby still needs.
				So that if you want to help out, you won't buy something the baby already has.
			</p>
			<p>
				<a href="#help-content" data-toggle="collapse" class="btn btn-inverse">How it works</a>
				<?php if (!Auth::instance()->logged_in()) : ?>
				<a href="#sign-in" data-toggle="collapse" class="btn btn-primary">Login</a>
				<?php endif; ?>
			</p>
		</div><!-- .container -->
	</div><!-- #masthead.jumbotron -->

	<div id="help-content" class="collapse">
		<div class="banner">
			<div class="container">
				<h2>How it works</h2>
				<ol>
					<li>Create an Account</li>
					<li>Reserve an item on the list</li>
					<li>Go out and buy it</li>
				</ol>
				<p>
					When you reserve an item, you are anonymous to us by default. You can switch that off if you want.
				</p>
				<h2>How to create an account</h2>
				<p>Simply send your e-mail address using the Sign Up form, and we will send you your login details.</p>
				<p>
					For security reasons, we might have to verify your e-mail address if it is unknown to us.
					This is to prevent <em>trolls</em> to create a fake account and "reserve" all the items without actually buying
					it. But if we do know your e-mail address, you'll receive the login details within an hour.
				</p>
				<p><small>
					This website is just a <em>virtual check list</em>, it does not obligate you to buy it.
					So only "reserve" an item if you really are willing to buy it for our baby.
				</small></p>
			</div><!-- .container -->
		</div><!-- .banner -->
	</div><!-- #help-content -->

	<?php if (!Auth::instance()->logged_in()) : ?>
	<div id="sign-in" class="collapse">
		<div class="banner">
			<div class="container">
				<p>
					<a href="#" class="btn btn-large"><strike>Facebook Login</strike></a>
					<a href="#" class="btn btn-large"><strike>Twitter Login</strike></a>
				</p>
				<hr>
				<form method="post" action="<?php echo Route::url('default', array('controller' => 'auth', 'action' => 'login')) ?>" class="form-inline">
					<input type="email" name="username" placeholder="E-mail" required>
					<input type="password" name="password" placeholder="Password" required>
					<button type="submit" class="btn">Login</button>
				</form>
				<p class="muted">Or use the link in the <em>E-mail</em> you have received.</p>
			</div><!-- .container -->
		</div><!-- .banner -->
	</div><!-- #sign-in -->
	<?php endif; ?>

	<?php if (!Auth::instance()->logged_in()) : ?>
	<div id="marketing">
		<div class="container">
			<h1>How to Sign Up</h1>
			<p class="marketing-byline">
				Sign up using <strike>Facebook</strike>, <strike>Twitter</strike> or just your <strong>regular E-mail</strong>.
			</p>
			<div class="row-fluid">

				<div class="span4">
					<h2>Facebook</h2>
					<p>Click the button, accept our website, and you have yourself an account!</p>
					<a href="javascript:alert('oops, this does not work yet.')" class="btn btn-xlarge">Sign Up</a>
				</div><!-- .span4 -->
				<div class="span4">
					<h2>Twitter</h2>
					<p>Use your twitter account if you don't have a Facebook account or don't want to give your email.</p>
					<a href="javascript:alert('oops, this does not work yet.')" class="btn btn-xlarge">Sign Up</a>
				</div><!-- .span4 -->

				<div class="span4">
					<h2>E-mail</h2>
					<p>Enter your <label for="input_email" style="display:inline;" class="btn-link">email address</label>, click the "Sign Up" button, and receive a link with which you can login</p>

					<form method="post" action="<?php echo Route::url('default', array('controller' => 'auth', 'action' => 'signup', 'id' => 'email')) ?>">
						<div class="input-append">
							<input type="email" name="email" placeholder="E-mail" id="input_email" required>
							<button class="btn" type="submit">Sign Up</button>
						</div>
					</form>
				</div><!-- .span4 -->
			</div><!-- .row-fluid -->
		</div><!-- .container -->
	</div><!-- #marketing -->
	<?php endif; ?>

	<div class="container">
		<h2>The List</h2>
		<table class="table">
			<thead>
				<tr>
					<th width=120></th>
					<th>Item</th>
					<th></th>
					<th>Reserve</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><img src="http://placehold.it/100x100" alt="Image of item" class="img-circle"></td>
					<td><h4>Title</h4></td>
					<td>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
						aliquip ex ea commodo consequat.
					</td>
					<td><a href="#" class="btn btn-large">RESERVE</a></td>
				</tr>
				<tr>
					<td><img src="http://placehold.it/100x100" alt="Image of item" class="img-circle"></td>
					<td><h4>Title</h4></td>
					<td>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
						aliquip ex ea commodo consequat.
					</td>
					<td><a href="#" class="btn btn-large">RESERVE</a></td>
				</tr>
				<tr>
					<td><img src="http://placehold.it/100x100" alt="Image of item" class="img-circle"></td>
					<td><h4>Title</h4></td>
					<td>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
						aliquip ex ea commodo consequat.
					</td>
					<td><a href="#" class="btn btn-large">RESERVE</a></td>
				</tr>
			</tbody>
		</table>
	</div><!-- .container -->

	<div id="push"></div><!-- #push -->
</div><!-- #wrap -->

<?php echo View::factory('fragment/footer') ?>