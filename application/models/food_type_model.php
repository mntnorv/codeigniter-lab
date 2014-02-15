<?php

class Food_Type_Model extends Base_Model {
	protected $_table = "food_types";

	public function seed() {
		$this->insert(array(
			'id' => 1,
			'name' => 'pizza',
			'display_name' => 'Picos'
		));

		$this->insert(array(
			'id' => 2,
			'name' => 'steaks',
			'display_name' => 'Kepsniai'
		));

		$this->insert(array(
			'id' => 3,
			'name' => 'snacks',
			'display_name' => 'Užkandžiai'
		));
		
		$this->insert(array(
			'id' => 4,
			'name' => 'drinks',
			'display_name' => 'Gėrimai'
		));
	}
}