<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Base_Controller {

	function __construct() {
		$this->load->database();
		$this->load->model('food_model');
	}

	public function index() {
		$all_food = $this->food_model->find_all();

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($all_food));
	}
}
