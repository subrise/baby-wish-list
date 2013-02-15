<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {


	// Sign up
	public function action_index()
	{
		$this->request->redirect(Route::url('default', array('controller' => 'auth', 'action' => 'signup')));
	}

	public function action_login()
	{
		$post = $this->request->post();
		if (isset($post['username'], $post['password'])) {
			Auth::instance()->login($post['username'], $post['password']);
		}
		$referer = Arr::get($post, 'referer', Route::url('default'));
		$this->request->redirect($referer);
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->request->redirect(Route::url('default'));
	}

	/*
	 * Sends the user a login email link
	 */
	public function action_signup()
	{
		// Retrieve type of signup
		$id = $this->request->param('id');
		// Retrieve post variables
		$post = $this->request->post();
		// if signup by email
		if ($id === 'email' && isset($post['email']) && !empty($post['email'])) {
			// retrieve email addres
			$email = $post['email'];
			// find if user already registered with this email address
			$user = ORM::factory('user', array('email' => $email));
			// if new user set username, email and generate a password
			if (!$user->loaded()) {
				$user->username = $email;
				$user->email    = $email;
				$user->password = hash('sha256', $email.time());
			}
			// if new user or hasn't generated a login by url hash, generate it
			if (!$user->loaded() || empty($user->auth_by_email)) {
				$user->auth_by_email = hash('sha256', $email.'kjgk23g5j2'.time());
				$user->save();
			}

			// Give user login permissions if he hasn't own them already
			$login_role = ORM::factory('role', array('name' => 'login'));
			if (!$user->has('roles', $login_role)) {
				$user->add('roles', $login_role);
			}

			// Give user friend status/role if email is recognized
			$allowed_friend = ORM::factory('allowedfriend', array('email' => $email));
			if ($allowed_friend->loaded()) {
				$friend_role = ORM::factory('role', array('name' => 'friend'));
				if (!$user->has('roles', $friend_role)) {
					$user->add('roles', $friend_role);
				}
			}

			// Send user login url
			$email_template = View::factory('email/login')
				->set('name', $user->name)
				->set('login_url', Route::url('default', array(
					'controller' => 'auth',
					'action' => 'email',
					'id' => $user->auth_by_email
				)));
			Email::send(
				$user->email,
				array('me@sammy.nu', 'Shanti & Sammy'),
				'Baby Wishlist - Login Information',
				$email_template,
				TRUE
			);

			// Show Feedback
			$this->response->body(View::factory('feedback_signup_email')->set('allowed_friend', $allowed_friend->loaded()));
		} else {
			// Signup id is not recognized, redirect to front
			$this->request->redirect(Route::url('default'));
		}
	}

	public function action_email()
	{
		$auth_by_email = $this->request->param('id');
		$user = ORM::factory('user', array('auth_by_email' => $auth_by_email));
		if ($user->loaded()) {
			Auth::instance()->force_login($user);
		}
		$this->request->redirect(Route::url('default'));
	}

} // End Controller_Auth