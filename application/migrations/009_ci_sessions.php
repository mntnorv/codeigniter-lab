<?php

class Migration_CI_Sessions extends CI_Migration {
	public function up(){
		$this->dbforge->add_field("session_id varchar(40) DEFAULT '0' NOT NULL");
		$this->dbforge->add_field("ip_address varchar(45) DEFAULT '0' NOT NULL");
		$this->dbforge->add_field("user_agent varchar(120) NOT NULL");
		$this->dbforge->add_field("last_activity int(10) unsigned DEFAULT 0 NOT NULL");
		$this->dbforge->add_field("user_data text NOT NULL");

		$this->dbforge->add_key('session_id', TRUE);
		$this->dbforge->add_key('last_activity');
	
		$this->dbforge->create_table('ci_sessions', TRUE);
	}

	public function down(){
		$this->dbforge->drop_table('ci_sessions');
	}
}