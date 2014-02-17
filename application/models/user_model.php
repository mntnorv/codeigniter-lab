<?php

class User_Model extends Base_Model {
	protected $_table = "users";

	public function seed() {
		$this->db->truncate($this->_table);

		$this->insert(array(
			'id'       => 1,
			'username' => 'admin',
			'password' => '$2a$10$2E.28H.16T9nDkCS9dEkc.0/5AwVqFOWD25dp20TlaeO/t/XodE4W',
			'type'     => 1
		));

		$this->insert(array(
			'id'       => 2,
			'username' => 'notadmin',
			'password' => '$2a$10$0xgEfb0ffcCg/38ekTJ/0OxvVhIcsWRB1CXU8xcFmgmZatwSZjWpW',
			'type'     => 2
		));
	}
}