<?php

class Order_Model extends Base_Model {
	protected $_table = "order_food";

	public function seed() {
		$this->db->truncate($this->_table);
	}
}