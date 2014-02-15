<?php

class User_Type_Model extends Base_Model {
	protected $_table = "user_types";

	public function seed() {
		$this->db->truncate($this->_table);
		
		$this->insert(array(
			'id' => 1,
			'name' => 'admin'
		));

		$this->insert(array(
			'id' => 2,
			'name' => 'client'
		));
	}
}