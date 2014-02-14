<?php if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Migrate extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->input->is_cli_request() 
			or exit("Execute via command line: php index.php migrate");

		$this->load->library('migration');

		$this->load->model('food_model');
		$this->load->model('food_type_model');
	}

	public function index() {
		if(!$this->migration->latest()) {
			show_error($this->migration->error_string());
		}
	}

	public function seed() {
		// Seed food types
		$this->food_type_model->insert(array(
			"name" => "pizza",
			"display_name" => "Pica"
		));

		$this->food_type_model->insert(array(
			"name" => "drinks",
			"display_name" => "Gėrimai"
		));

		$this->food_type_model->insert(array(
			"name" => "snacks",
			"display_name" => "Užkandžiai"
		));

		// Seed food
		$this->food_model->insert(array(
			"name" => "Margarita",
			"type" => "1",
			"price" => "10"
		));

		$this->food_model->insert(array(
			"name" => "Capricioza",
			"type" => "1",
			"price" => "13"
		));
	}
}