<?php

class Order_State_Model extends Base_Model {
	protected $_table = "order_states";

	public function seed() {
		$this->db->truncate($this->_table);
		
		$this->insert(array(
			'id' => 1,
			'name' => 'New'
		));

		$this->insert(array(
			'id' => 2,
			'name' => 'Ordered'
		));

		$this->insert(array(
			'id' => 3,
			'name' => 'Executed'
		));

		$this->insert(array(
			'id' => 4,
			'name' => 'Transported'
		));

		$this->insert(array(
			'id' => 5,
			'name' => 'Done'
		));
	}
}