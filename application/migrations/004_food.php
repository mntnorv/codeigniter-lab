<?php

class Migration_Food extends CI_Migration {
	public function up(){
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("name varchar(255) NOT NULL");
		$this->dbforge->add_field("type int(11) unsigned NOT NULL");
		$this->dbforge->add_field("price double unsigned NOT NULL");

		$this->dbforge->add_key('id', TRUE);
	
		$this->dbforge->create_table('food', TRUE);
	}

	public function down(){
		$this->dbforge->drop_table('food');
	}
}