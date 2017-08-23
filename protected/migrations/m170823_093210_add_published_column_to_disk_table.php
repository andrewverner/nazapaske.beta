<?php

class m170823_093210_add_published_column_to_disk_table extends CDbMigration
{
	public function up()
	{
	    $this->addColumn('disk', 'published', 'tinyint(1) not null default 1');
	}

	public function down()
	{
		$this->dropColumn('disk', 'published');
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