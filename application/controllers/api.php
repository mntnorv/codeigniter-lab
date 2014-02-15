<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API extends Base_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function food($type = "") {
		$output = [];

		if ($type == "") {
			$output = array(
				"food" => $this->food_model->find_all()
			);
		} else {
			$types = $this->food_type_model->find_by_name($type);

			if (count($types) != 0) {
				$type_id = $types[0]->id;
				$output = array(
					"food" => $this->food_model->find_by_type($type_id)
				);
			} else {
				$output['error'] = 'no such food type';
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($output));
	}
}
