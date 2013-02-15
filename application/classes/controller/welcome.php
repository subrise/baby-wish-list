<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = View::factory('front');
		$this->response->body($view);
	}
	
	public function action_test()
	{
		$view = View::factory('feedback_signup_email');
		$this->response->body($view);
	}

} // End Welcome
