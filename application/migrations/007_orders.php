<?php

class Migration_Orders extends CI_Migration {
	public function up(){
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("user_id int(11) unsigned NOT NULL");
		$this->dbforge->add_field("city int(11) unsigned NOT NULL");
		$this->dbforge->add_field("street varchar(255) NOT NULL");
		$this->dbforge->add_field("building_no varchar(16) NOT NULL");
		$this->dbforge->add_field("flat_no varchar(16) NOT NULL");
		$this->dbforge->add_field("door_code varchar(16) NOT NULL");
		$this->dbforge->add_field("phone varchar(255) NOT NULL");
		$this->dbforge->add_field("state int(11) unsigned NOT NULL");
		$this->dbforge->add_field("final_price double unsigned NOT NULL");

		$this->dbforge->add_key('id', TRUE);
	
		$this->dbforge->create_table('orders', TRUE);
	}

	public function down(){
		$this->dbforge->drop_table('orders');
	}
}