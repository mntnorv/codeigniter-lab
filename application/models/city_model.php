<?php

class City_Model extends Base_Model {
	protected $_table = "cities";

	public function seed() {
		$this->db->truncate($this->_table);
		
		$this->insert(array(
			'name'  => 'Kaunas'
		));

		$this->insert(array(
			'name'  => 'Klaipėda'
		));

		$this->insert(array(
			'name'  => 'Vilnius'
		));
	}
}