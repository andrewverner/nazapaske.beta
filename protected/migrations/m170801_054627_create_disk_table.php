<?php

class m170801_054627_create_disk_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('disk', [
	        'id' => 'pk',
            'width' => 'FLOAT NOT NULL',
            'diameter' => 'TINYINT(2) NOT NULL',
            'bolts_count' => 'TINYINT(1) NOT NULL',
            'pcd' => 'FLOAT NOT NULL',
            'et' => 'FLOAT NOT NULL',
            'dia' => 'FLOAT NOT NULL',
            'price' => 'INT NOT NULL',
            'name' => 'VARCHAR(255) NOT NULL',
            'color' => 'VARCHAR(45) NOT NULL',
            'producer' => 'INT NOT NULL',
            'img' => 'INT',
            'priority' => 'INT DEFAULT 0',
            'percent' => 'INT DEFAULT 0',
            'rest' => 'INT'
        ], 'charset=utf8');
	}

	public function down()
	{
		echo "m170801_054627_create_disk_table does not support migration down.\n";
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
