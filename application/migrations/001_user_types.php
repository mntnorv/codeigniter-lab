<?php

class Migration_User_Types extends CI_Migration {
	public function up(){
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("name varchar(255) NOT NULL");

		$this->dbforge->add_key('id', TRUE);
	
		$this->dbforge->create_table('user_types', TRUE);
	}

	public function down(){
		$this->dbforge->drop_table('user_types');
	}
}