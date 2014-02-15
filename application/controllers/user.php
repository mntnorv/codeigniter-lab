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

	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}

	private function show_login() {
		$this->render('login');
	}

	private function handle_login() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->form_validation->run() == FALSE) {
			$this->show_login();
		} else {
			$users = $this->user_model->find_by_username($username);

			if (count($users) == 0) {
				$this->session->set_flashdata('error', 'Incorrect username');
				redirect('/user/login');
			} else {
				if (password_verify($password, $users[0]->password)) {
					$userdata = (array) $users[0];
					$userdata['logged_in'] = TRUE;
					$this->session->set_userdata($userdata);
					$this->session->set_flashdata('success', 'Successfully logged in');
					redirect('/');
				} else {
					$this->session->set_flashdata('error', 'Incorrect username or password');
					redirect('/user/login');
				}
			}
		}
	}
}
