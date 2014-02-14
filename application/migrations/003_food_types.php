<?php

class Migration_Food_Types extends CI_Migration {
	public function up() {
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("name varchar(64) NOT NULL");
		$this->dbforge->add_field("display_name varchar(255) NOT NULL");

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('name');
	
		$this->dbforge->create_table('food_types', TRUE);
	}

	public function down() {
		$this->dbforge->drop_table('food_types');
	}
}