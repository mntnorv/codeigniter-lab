<?php if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Migrate extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->input->is_cli_request() 
			or exit("Execute via command line: php index.php migrate");

		$this->load->library('migration');
	}

	public function index() {
		if(!$this->migration->latest()) {
			show_error($this->migration->error_string());
		}
	}

	public function seed() {
		$this->user_type_model->seed();
		$this->user_model->seed();
		$this->food_type_model->seed();
		$this->food_model->seed();
		$this->city_model->seed();
		$this->order_state_model->seed();
		$this->order_model->seed();
		$this->order_food_model->seed();
	}
}