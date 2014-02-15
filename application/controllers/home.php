<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Base_Controller {

	protected $local_stylesheets = array(
		"home.css"
	);

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('food_type_model');
	}

	public function index() {
		$data = array(
			"food_types" => $this->food_type_model->find_all()
		);

		$this->render('index', $data);
	}
}
