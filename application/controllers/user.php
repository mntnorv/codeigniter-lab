<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Base_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
	}

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
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->show_login();
		} else {
			$this->session->set_flashdata('success', 'Logged in successfully');
			redirect('/');
		}
	}
}
