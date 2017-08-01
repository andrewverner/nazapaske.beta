<?php

class m170801_054643_create_tire_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('tire', [
	        'id' => 'pk',
            'width' => 'FLOAT NOT NULL',
            'diameter' => 'FLOAT NOT NULL',
            'height' => 'FLOAT NOT NULL',
            'season' => 'TINYINT(1) NOT NULL DEFAULT 1',
            'price' => 'INT NOT NULL',
            'name' => 'VARCHAR(255) NOT NULL',
            'speed_index' => 'VARCHAR(2)',
            'load_index' => 'INT',
            'studding' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'img' => 'INT',
            'producer' => 'INT NOT NULL',
            'priority' => 'INT DEFAULT 0',
            'rest' => 'INT'
        ], 'charset=utf8');
	}

	public function down()
	{
		echo "m170801_054643_create_tire_table does not support migration down.\n";
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
