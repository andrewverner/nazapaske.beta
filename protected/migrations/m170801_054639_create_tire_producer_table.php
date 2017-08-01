<?php

class m170801_054639_create_tire_producer_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('tire_producer', [
	        'id' => 'pk',
            'title' => 'VARCHAR(45) NOT NULL'
        ], 'charset=utf8');
	}

	public function down()
	{
		echo "m170801_054639_create_tire_producer_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
