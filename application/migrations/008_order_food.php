<?php

class Migration_Order_Food extends CI_Migration {
	public function up(){
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("food_id int(11) unsigned NOT NULL");
		$this->dbforge->add_field("order_id int(11) unsigned NOT NULL");
		$this->dbforge->add_field("amount int(11) unsigned NOT NULL");

		$this->dbforge->add_key('id', TRUE);
	
		$this->dbforge->create_table('order_states', TRUE);
	}

	public function down(){
		$this->dbforge->drop_table('order_states');
	}
}