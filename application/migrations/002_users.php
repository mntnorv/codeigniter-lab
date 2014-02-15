<?php

class Migration_Users extends CI_Migration {
	public function up() {
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("username varchar(255) NOT NULL");
		$this->dbforge->add_field("password varchar(255) NOT NULL");
		$this->dbforge->add_field("type int(11) unsigned NOT NULL");

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('username');
	
		$this->dbforge->create_table('users', TRUE);
	}

	public function down() {
		$this->dbforge->drop_table('users');
	}
}