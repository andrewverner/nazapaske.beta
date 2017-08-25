<?php

class m170824_144909_create_image_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('image', [
	        'id' => 'pk',
            'name' => 'varchar(45) not null',
            'path' => 'varchar(45) not null',
            'size' => 'int not null',
            'uploaded' => 'datetime not null',
            'updated' => 'datetime'
        ], 'charset=utf8');
	}

	public function down()
	{
		echo "m170824_144909_create_image_table does not support migration down.\n";
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