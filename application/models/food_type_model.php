<?php

class Food_Type_Model extends Base_Model {
	protected $_table = "food_types";

	public function seed() {
		$this->db->truncate($this->_table);
		
		$this->insert(array(
			'id' => 1,
			'name' => 'pizza',
			'display_name' => 'Pizza'
		));

		$this->insert(array(
			'id' => 2,
			'name' => 'steaks',
			'display_name' => 'Steaks'
		));

		$this->insert(array(
			'id' => 3,
			'name' => 'snacks',
			'display_name' => 'Snacks'
		));
		
		$this->insert(array(
			'id' => 4,
			'name' => 'drinks',
			'display_name' => 'Drinks'
		));
	}
}