<?php

class m170824_090232_add_published_column_to_tire_table extends CDbMigration
{
	public function up()
	{
	    $this->addColumn('tire', 'published', 'tinyint(1) default 1');
	}

	public function down()
	{
		$this->dropColumn('tire', 'published');
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