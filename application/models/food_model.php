<?php

class Food_Model extends Base_Model {
	protected $_table = "food";

	public function seed() {
		$this->insert(array(
			'name'  => 'Capricioza',
			'type'  => 1,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Steikas',
			'type'  => 2,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Koldūnai',
			'type'  => 3,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Coca-Cola',
			'type'  => 4,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Sprite',
			'type'  => 4,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Fanta',
			'type'  => 4,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Pepsi',
			'type'  => 4,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Studentiška',
			'type'  => 1,
			'price' => 1
		));

		$this->insert(array(
			'name'  => 'Aštri',
			'type'  => 1,
			'price' => 1
		));
	}
}