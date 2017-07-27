<?php

class m170727_100655_create_user_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('user', [
	        'id' => 'pk',
            'username' => 'VARCHAR(45) NOT NULL',
            'password' => 'VARCHAR(32) NOT NULL',
            'email' => 'VARCHAR(45) NOT NULL',
            'admin' => 'TINYINT(1) NOT NULL DEFAULT 0',

        ], 'charset=utf8');
	}

	public function down()
	{
		echo "m170727_100655_create_user_table does not support migration down.\n";
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