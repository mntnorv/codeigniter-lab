<?php

class Food_Model extends Base_Model {
	protected $_table = "food";

	public function seed() {
		$this->db->truncate($this->_table);
		
		$this->insert(array(
			'name'  => 'Capricioza',
			'type'  => 1,
			'price' => 10
		));

		$this->insert(array(
			'name'  => 'Beef steak',
			'type'  => 2,
			'price' => 15
		));

		$this->insert(array(
			'name'  => 'Coca-Cola',
			'type'  => 4,
			'price' => 2
		));

		$this->insert(array(
			'name'  => 'Sprite',
			'type'  => 4,
			'price' => 2
		));

		$this->insert(array(
			'name'  => 'Fanta',
			'type'  => 4,
			'price' => 2
		));

		$this->insert(array(
			'name'  => 'Pepsi',
			'type'  => 4,
			'price' => 2
		));

		$this->insert(array(
			'name'  => 'Spicy',
			'type'  => 1,
			'price' => 11
		));

		$this->insert(array(
			'name'  => 'Lays chips',
			'type'  => 3,
			'price' => 3
		));
	}
}