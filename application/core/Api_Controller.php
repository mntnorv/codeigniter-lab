<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->library("session");
	}

	protected function json_error($error_string) {
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array(
				'error' => $error_string
			)));
	}

	protected function json_success($success_string) {
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array(
				'success' => $success_string
			)));
	}
}
