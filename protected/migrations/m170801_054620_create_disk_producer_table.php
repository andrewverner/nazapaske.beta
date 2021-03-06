<?php

class m170801_054620_create_disk_producer_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('disk_producer', [
	        'id' => 'pk',
            'title' => 'VARCHAR(45) NOT NULL'
        ], 'charset=utf8');
	}

	public function down()
	{
		echo "m170801_054620_create_disk_producer_table does not support migration down.\n";
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
