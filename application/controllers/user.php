<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Base_Controller {

	public function login() {
		$method = $this->input->server('REQUEST_METHOD');

		if ($method == 'GET') {
			$this->show_login();
		} else if ($method == 'POST') {
			$this->handle_login();
		}
	}

	private function show_login() {
		$this->render('login');
	}

	private function handle_login() {

	}
}
