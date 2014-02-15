<?php

class Food_Model extends Base_Model {
	protected $_table = "food";

	public function find_by_id_list($id_list) {
		foreach ($id_list as $id) {
			$this->db->or_where($this->primary_key, $id);
		}
		
		$this->trigger_event("before_find");
		$result = $this->db->get($this->_table)->result();
		$this->trigger_event("after_find", array($result));

		return $result;
	}

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
